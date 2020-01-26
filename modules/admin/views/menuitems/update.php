<?php

use app\models\Menuitems;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Menuitems */

$this->title = 'Обновление: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить запись';
?>
<div class="menuitems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
