<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Probabilidade $model */

$this->title = 'Editar Probabilidade: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Probabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="probabilidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
