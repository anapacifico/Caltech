<?php

use app\models\Velocidadex;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VelocidadexSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Lançamento Oblíquo (Velocidade do eixo x)';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="velocidadex-index">

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
            'cosseno',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Velocidadex $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
