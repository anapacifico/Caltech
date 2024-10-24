<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Periodo $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Período', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="periodo-view">

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
            'frequencia',
        ],
    ]) ?>
    <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Período </h2>
    <p>A fórmula para calcular um Período é:<figure>
     <img src="<?= Yii::getAlias('@web') ?>/img/periodo.png">
    <figcaption></figcaption>
    </figure> <strong></strong></p>
    <p>Com os valores fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Periodo calculado: 
        <strong style="color: #FF5722;"><?= 1 / $model->frequencia; ?> 
    </strong>
    (s)
    </p>
</div>
    
</div>
