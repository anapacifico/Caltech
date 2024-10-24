<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Haltura $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="haltura-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'velocidadei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'angulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gravidade')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcule', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
