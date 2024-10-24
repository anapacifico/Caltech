<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Centripeda $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Centripeda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="centripeda-view">

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
            'raio',
            'velocidade',
        ],
    ]) ?>
    <div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Aceeração Centripeda</h2>
    <p>A fórmula da aceleração centrípeda é:<figure>
     <img src="<?= Yii::getAlias('@web') ?>/img/centripeda.png">
    <figcaption></figcaption>
    </figure> <strong></strong></p>
    <p>Com os valores fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Altura calculada: 
        <strong style="color: #FF5722;"><?= $model->velocidade *  $model->velocidade /  $model->raio; ?> 
    </strong>
    (m)
    </p>
</div>
    
</div>
