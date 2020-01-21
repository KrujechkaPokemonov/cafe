<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Advertiser */

$this->title = 'Create Advertiser';
$this->params['breadcrumbs'][] = ['label' => 'Advertisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertiser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
