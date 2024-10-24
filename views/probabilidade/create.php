<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Probabilidade $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Probabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="probabilidade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
