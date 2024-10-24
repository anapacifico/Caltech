<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Haltura $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Halturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="haltura-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'velocidadei',
            'angulo',
            'gravidade',
        ],
    ]) ?>
    <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Altura de Lançamento</h2>
    <p>A fórmula da altura de um lançamento é:<figure>
     <img src="<?= Yii::getAlias('@web') ?>/img/haltura.png">
    <figcaption></figcaption>
    </figure> <strong></strong></p>
    <p>Com os valores fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Altura calculada: 
        <strong style="color: #FF5722;"><?= $model->velocidadei *  $model->velocidadei * $model->angulo / 2 * $model->gravidade; ?> 
    </strong>
    (m)
    </p>
</div>
    
</div>
