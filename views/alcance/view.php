<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Alcance $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alcance', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alcance-view">

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
            'velocidade',
            'seno',
            'gravidade',
        ],
    ]) ?>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Alcance </h2>
    <p>A fórmula de Alcance é: <strong> A = V² * sen(2θ)/2 </strong></p>
    <p>Com os valoresfornecidos, esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;"> Alcance calculado: 
    <strong style="color: #FF5722;">
            <?= $model->velocidade * $model->velocidade * $model->seno / 2; ?> 
            
        </strong>
    </p>
</div>
