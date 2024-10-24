<?php

use app\models\Centripeda;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CentripedaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Centripeda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centripeda-index">

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
            'raio',
            'velocidade',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Centripeda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
