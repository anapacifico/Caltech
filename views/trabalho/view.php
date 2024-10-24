<?php

use yii\base\Model;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Trabalho $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trabalhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="trabalho-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Ecluir', ['delete', 'id' => $model->id], [
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
            'massa',
            'agravidade',
            'altura',
        ],
    ]) ?>
    <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #ff6a00;">Energia Potencial Gravitacional </h2>
    <p>A energia potencial gravitacional é: <strong> Ep = m . g . h</strong></p>
    <p>Com os dados fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Ep Calculada: 
        <strong style="color: #FF5722;"><?= $model->massa * $model->agravidade * $model->altura; ?> </strong>

    (J)
    </p>
</div>
