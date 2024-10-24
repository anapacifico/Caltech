<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Baskara $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="baskara-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a')->textInput() ?>

    <?= $form->field($model, 'b')->textInput() ?>

    <?= $form->field($model, 'c')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
