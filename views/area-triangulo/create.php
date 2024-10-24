<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AreaTriangulo $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Area Triangulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-triangulo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
