<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Director $model */

$this->title = 'Create Director';
$this->params['breadcrumbs'][] = ['label' => 'Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="director-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
