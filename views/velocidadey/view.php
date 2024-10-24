<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Velocidadey $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Velocidade', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="velocidadey-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
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
            'velocidadei',
            'angulo',
        ],
    ]) ?>
     <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Velocidade inicial no eixo y  </h2>
    <p>A fórmula para calcular a velocidade inicial no eixo y é:<figure>
     <img src="<?= Yii::getAlias('@web') ?>/img/velocidadey.png">
    <figcaption></figcaption>
    </figure> <strong></strong></p>
    <p>Com os valores fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Velocidade calculada: 
        <strong style="color: #FF5722;"><?= $model->velocidadei * $model->angulo; ?> 
    </strong>
    (m/s)
</div>
