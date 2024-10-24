<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mru $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pinicial')->textInput() ?>

    <?= $form->field($model, 'velocidade')->textInput() ?>

    <?= $form->field($model, 'intervalot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
