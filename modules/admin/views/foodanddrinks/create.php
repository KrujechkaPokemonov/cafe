<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foodanddrinks */

$this->title = 'Создание';
$this->params['breadcrumbs'][] = ['label' => 'Еда и напитки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foodanddrinks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
