<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Moderator */

$this->title = 'Создать запись о пользователе';
$this->params['breadcrumbs'][] = ['label' => 'Модераторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="moderator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
