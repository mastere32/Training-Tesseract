<?php

use yii\db\Migration;

/**
 * Class m240612_065157_movies
 */
class m240612_065157_movies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'year' => $this->integer(),
            'description' => $this->text(),
            'director_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('director', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex('idx-movie-director', 'movie', 'director_id');
        $this->addForeignKey('fk-movie-director', 'movie', 'director_id', 'director', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-movie-director', 'movie');
        $this->dropTable('movie');
        $this->dropTable('director');
        return true;
    }
}
