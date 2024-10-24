<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Angular $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Angular', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="angular-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir esse item',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'frequencia',
        ],
    ]) ?>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula da velocidade angular é </h2>
    <p>A fórmula da velocidade angular é: <strong> ω = 2 . π . f </strong></p>
    <p>Com os valores da base e altura fornecidos, esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;"> Velocidade calculada: 
    <strong style="color: #FF5722;">
            <?= 2 * 3.14 * $model->frequencia; ?> 
        </strong>
        (rad/s)
    </p>
</div>
