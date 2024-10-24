<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AreaTriangulo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="area-triangulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'base')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altura')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
