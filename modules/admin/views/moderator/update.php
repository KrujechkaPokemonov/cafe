<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Moderator */

$this->title = 'Обновить запись о пользователе: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Модераторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="moderator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
