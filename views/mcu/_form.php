<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mcu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mcu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'raio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vangular')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
