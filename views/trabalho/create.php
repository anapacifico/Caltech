<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trabalho $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Trabalhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trabalho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
