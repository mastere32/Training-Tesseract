<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Director;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var common\models\Movie $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'director_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Director::find()->all(), 'id', 'name'),
        'options' => ['placeholder' => 'Select a director ...'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
