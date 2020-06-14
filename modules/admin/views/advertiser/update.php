<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Advertiser */

$this->title = 'Обновление записи: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Рекламщики', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="advertiser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
