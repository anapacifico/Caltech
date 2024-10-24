<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AreaTriangulo $model */

$this->title = 'Editar Área do Triângulo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Área Triângulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="area-triangulo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
