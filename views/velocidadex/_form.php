<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Velocidadex $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="velocidadex-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'velocidadei')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cosseno')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcule', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
