<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Impulso $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Impulsos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="impulso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
