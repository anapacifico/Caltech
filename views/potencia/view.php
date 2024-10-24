<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Potencia $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Potencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="potencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
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
            'trabalho',
            'itempo',
        ],
    ]) ?>
<div>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Potencia </h2>
    <p>A potencia é: <strong> P = T/  ∆t</strong></p>
    <p>Com os dados fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333; ">Potencia Calculada:
        <strong style="color: #FF5722;"><?= $model->trabalho / $model->itempo; ?> </strong>
        (w)
    </p>
</div>
</div>
