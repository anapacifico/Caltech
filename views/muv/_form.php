<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Muv $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="muv-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vinicial')->textInput() ?>

    <?= $form->field($model, 'aceleracao')->textInput() ?>

    <?= $form->field($model, 'tempo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcule', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
