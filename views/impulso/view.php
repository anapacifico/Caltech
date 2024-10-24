<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Impulso $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Impulsos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="impulso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'massa',
            'velocidade',
        ],
    ]) ?>
<div>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;"> Impulso </h2>
    <p>O valor do impulso é: <strong> Q = m . v </strong></p>
    <p>Com os dados fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333; ">Impulso Calculado:
        <strong style="color: #FF5722;"><?= $model->massa * $model->velocidade; ?> </strong>
        (kg.m/s)
    </p>
</div>
</div>
