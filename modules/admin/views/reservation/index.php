<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запросы на бронирование';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'id',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->lounge->title;
                },
                'format' => 'raw',
            ],
            'name',
            'phone',
            'date',
            'time',
            'person',
            'email:email',
            [
                'attribute' => 'id',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->booktable->title;
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'id',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->status->status;
                },
                'format' => 'raw',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
