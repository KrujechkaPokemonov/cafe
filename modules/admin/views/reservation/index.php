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
    <p>Залы:</p>
    <p>2-Крыша</p>
    <p>3-Диван</p>
    <p>3-Подвал</p>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="alert alert-success">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_lounge',
            'name',
            'phone',
            'date',
            'time',
            'person',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
