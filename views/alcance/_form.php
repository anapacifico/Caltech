<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Alcance $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alcance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'velocidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gravidade')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
