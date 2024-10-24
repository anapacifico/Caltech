<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Trabalho $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="trabalho-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'massa')->textInput() ?>

    <?= $form->field($model, 'agravidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
