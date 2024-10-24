<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trabalho $model */

$this->title = 'Editar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trabalhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trabalho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>