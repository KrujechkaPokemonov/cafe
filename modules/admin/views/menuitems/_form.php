<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Menuitems;

/* @var $this yii\web\View */
/* @var $model app\models\Menuitems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menuitems-form">

    <?php $form = ActiveForm::begin();
    $menu = Menuitems::find()->all();?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->dropDownList(ArrayHelper::map($menu, 'id', 'name'),
        [
            'prompt' => 'Выбор',
        ])
    ?>

    <font color="red" size="5">ВАЖНО!</font><p>В поле "Родитель" нужно правильно выбрать к какому родителю присоединить введённый текст в поле "Название"!</p>
    <p>К "Меню для посетителей" присоединяются категории "Еда", "Напитки" и "Алкоголь"</p>
    <p>К категориям присоединяются классификации! Например, к категории "Еда" присоеденены классификации: "Десерты", "Гарник", "Супы" и "Паста"</p>
    <p>К классификациям присоединяются блюда или напитки! Например, к "Десерты" присоеденены блюда: "Фирменные эклеры ресторана>50"</p>
    <p>Если к блюду или напитку требуется описание или выбор, то записывать в скобках! Описание или выбор присоединять к блюду или напитку!</p>
    <br>
    <p>К "Меню для кошек" присоединяются только блюда, а к блюдам описание или выбор!</p>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
