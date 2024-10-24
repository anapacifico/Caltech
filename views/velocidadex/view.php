<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Velocidadex $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Velocidade', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="velocidadex-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'velocidadei',
            'cosseno',
        ],
    ]) ?>
     <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Velocidade do eixo x  </h2>
    <p>A fórmula para calcular a velocidade do eixo x é:<figure>
     <img src="<?= Yii::getAlias('@web') ?>/img/velocidadex.png">
    <figcaption></figcaption>
    </figure> <strong></strong></p>
    <p>Com os valores fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Velocidade calculada: 
        <strong style="color: #FF5722;"><?= $model->velocidadei * $model->cosseno; ?> 
    </strong>
    (m/s)
</div>
