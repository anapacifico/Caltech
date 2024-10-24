<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\AreaTriangulo $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Área de Triângulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="area-triangulo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'base',
            'altura',
        ],
    ]) ?>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula da Área de um triângulo equilátero </h2>
    <p>A fórmula da área de um triângulo equilátero é: <strong> A = b * h / 2</strong></p>
    <p>Com os valores da base e altura fornecidos, esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;"> Área calculada: 
    <strong style="color: #FF5722;">
            <?= $model->base * $model->altura / 2; ?> 
            cm²
        </strong>
    </p>
</div>
</div>
