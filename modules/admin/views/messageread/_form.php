<?php

use app\models\Messagere;
use app\models\Status;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Messageread */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messageread-form">

    <?php $form = ActiveForm::begin();
    $status = Status::find()->all();
    $messagere = Messagere::find()->all();?>

    <?= $form->field($model, 'id_messagere')->dropDownList(ArrayHelper::map($messagere, 'id', 'text'),
        [
            'prompt' => 'Выбор',
        ])
    ?>

    <?= $form->field($model, 'id_status')->dropDownList(ArrayHelper::map($status, 'id', 'status'),
        [
            'prompt' => 'Выбор',
        ])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
