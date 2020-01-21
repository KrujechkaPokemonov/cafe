<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Moderator */

$this->title = 'Update Moderator: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Moderators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moderator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
