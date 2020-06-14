<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Messagere */

$this->title = 'Отправить сообщения';
$this->params['breadcrumbs'][] = ['label' => 'Сообщения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messagere-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
