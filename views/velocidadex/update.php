<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Velocidadex $model */

$this->title = 'Editar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Velocidadexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="velocidadex-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
