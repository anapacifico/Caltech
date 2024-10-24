<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Velocidadey $model */

$this->title = 'Editar:' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Velocidade', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="velocidadey-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
