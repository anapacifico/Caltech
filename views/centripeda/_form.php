<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Centripeda $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="centripeda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'raio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'velocidade')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcule', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
