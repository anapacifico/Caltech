<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mcu $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Mcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mcu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
