<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Messageread */

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = ['label' => 'Сообщения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messageread-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
