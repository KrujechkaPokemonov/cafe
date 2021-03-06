<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LoungeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Залы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lounge-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'description:ntext',
            [
                'format' => 'html',
                'label' => 'Image',
                'value' => function($data)
                {
                    return Html::img($data->getImage(), ['width' => 200]);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
