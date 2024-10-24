<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Angular $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Angular', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>