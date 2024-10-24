<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Potencia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trabalho')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'itempo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcule', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
