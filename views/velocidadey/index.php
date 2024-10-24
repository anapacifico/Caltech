<?php

use app\models\Velocidadey;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VelocidadeySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Velocidade';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="velocidadey-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Calcule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'velocidadei',
            'angulo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Velocidadey $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
