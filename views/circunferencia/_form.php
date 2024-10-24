<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Circunferencia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="circunferencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'raio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
