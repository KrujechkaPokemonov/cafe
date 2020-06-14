<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Administrator */

$this->title = 'Создать запись о пользователе';
$this->params['breadcrumbs'][] = ['label' => 'Администраторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
