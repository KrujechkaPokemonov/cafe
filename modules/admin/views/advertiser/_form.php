<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Advertiser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertiser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_administrator')->textInput() ?>

    <?= $form->field($model, 'id_news')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
