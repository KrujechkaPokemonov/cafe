<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>KissKiss</title>
    <?php $this->head() ?>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="/public/images/index.html">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/public/images/favicon.png">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $items=[];
    if (Yii::$app->user->isGuest){
        $items[0]=['label' => 'Вход', 'url' => ['/auth/login']];
    } else{
        $items[0]= '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';

        if (Yii::$app->user->identity->isadmin){
            $items[1]=['label' => 'Пользователи', 'url' => ['/admin/user/index']];
            $items[3]=['label' => 'Меню', 'url' => ['/admin/menuitems/index']];
            $items[5]=['label' => 'Залы', 'url' => ['/admin/lounge/index']];
            $items[6]=['label' => 'Администратор', 'url' => ['/admin/administrator/index']];
            $items[7]=['label' => 'Рекламщик', 'url' => ['/admin/advertiser/index']];
            $items[8]=['label' => 'Модератор', 'url' => ['/admin/moderator/index']];
            $items[9]=['label' => 'Сообщения', 'url' => ['/admin/messagere/index']];
        }else if (Yii::$app->user->identity->ismoder){
            $items[1]=['label' => 'Брони', 'url' => ['/admin/reservation/index']];
            $items[2]=['label' => 'Подтверждение брони', 'url' => ['/site/confirmation']];
        }
        else if (Yii::$app->user->identity->isnews){
            $items[1]=['label' => 'Новости', 'url' => ['/admin/news/index']];
            $items[9]=['label' => 'Мои сообщения', 'url' => ['/admin/messageread/index']];
        }
    };


    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; KissKiss <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

