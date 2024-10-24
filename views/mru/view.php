<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mru $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mru-view">

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
            'pinicial',
            'velocidade',
            'intervalot',
        ],
    ]) ?>
<div style="text-align: center; font-family: Arial, sans-serif;">
    <h2 style="color: #4CAF50;">Movimento retilineo uniforme </h2>
    <p>A posição final é: <strong>s = s0 + v . ∆t</strong></p>
    <p>Com os dados fornecidos esse é o resultado:</p>
    <p style="font-size: 20px; color: #333; ">Posição final:
        <strong style="color: #FF5722;"><?= $model->pinicial + $model->velocidade * $model->intervalot; ?> </strong>
        (m)
    </p>
</div>
</div>
