<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Muv $model */

$this->title = 'Calcule';
$this->params['breadcrumbs'][] = ['label' => 'Muvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="muv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
