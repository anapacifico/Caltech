<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Baskara $model */

$this->title = 'Create Baskara';
$this->params['breadcrumbs'][] = ['label' => 'Baskara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baskara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
