<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Probabilidade $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="probabilidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'favoravel')->textInput() ?>

    <?= $form->field($model, 'possivel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
