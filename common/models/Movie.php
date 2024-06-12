<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $year
 * @property string|null $description
 * @property int $director_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Director $director
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    public function behaviors(){
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'director_id',], 'integer'],
            [['description'], 'string'],
            [['director_id', 'description', 'title', 'year',], 'required'],
            [['title'], 'string', 'max' => 255],
            [['director_id'], 'exist', 'skipOnError' => true, 'targetClass' => Director::class, 'targetAttribute' => ['director_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'description' => 'Description',
            'director_id' => 'Director',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Director]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::class, ['id' => 'director_id']);
    }

    public function getShortDescription(){
        return substr($this->description, 0, 20) . '...';
    }
}
