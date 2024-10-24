<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Circunferencia $model */

$this->title = 'Editar Circunferência: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Circunferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="circunferencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
