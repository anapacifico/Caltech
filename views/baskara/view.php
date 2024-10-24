<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Baskara $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Baskara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="baskara-view">

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
            'a',
            'b',
            'c',
        ],
    ]) ?>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Fórmula de Baskara</h2>
    <p>A fórmula de Baskara é: <strong>Δ = b² - 4ac</strong></p>
    <p>Com os coeficientes fornecidos, esse é o resultado:</p>
    <p style="font-size: 20px; color: #333;">
        Delta Calculado: 
        <strong style="color: #FF5722;">
            <?= pow($model->b, 2) - 4 * $model->a * $model->c; ?> 
            cm²
        </strong>
    </p>
</div>
</div>
