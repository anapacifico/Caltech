<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Angular $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="angular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'frequencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
