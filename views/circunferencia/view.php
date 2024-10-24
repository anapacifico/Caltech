<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Circunferencia $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Circunferências', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="circunferencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['Update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['Delete', 'id' => $model->id], [
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
            'raio',
        ],
    ]) ?>


<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula da Circunferência</h2>
    <p>A fórmula da circunferência de um círculo é: <strong>C = 2πr</strong></p>
    <p>Com o raio fornecido esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">Circunferência calculada: 
        <strong style="color: #FF5722;"><?= 2 * 3.14 * $model->raio; ?> cm</strong>
    </p>
</div>
    
</div>
