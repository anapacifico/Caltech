<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Alcance $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Alcance', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alcance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
