<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>KissKiss</title>
    <?php $this->head() ?>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="/public/images/index.html">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/public/images/favicon.png">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="\"><img src="/public/images/logotip.png" alt="KissKiss"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><?= Html::a('Главная', ['/'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?= Html::a('Меню', ['/site/test'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?= Html::a('Бронирование', ['/site/reservation'], ['class' => 'nav-link']) ?></li>
                <li class="nav-item"><?= Html::a('Залы', ['/site/lounge'], ['class' => 'nav-link']) ?></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->




<?= $content ?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Важно</h2>
                    <p>Использование любых материалов в коммерческих или некоммерческих целях
                        разрешено только с предварительно полученного письменного согласия владельцев ресурса.</p>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Часы работы</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Понедельник: <span>13:00 - 21:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Вторник: <span>12:00 - 20:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Среда: <span>12:00 - 20:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Четверг: <span>13:00 - 21:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Пятница: <span>13:00 - 21:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Суббота: <span>12:00 - 20:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Воскресенье: <span>13:00 - 21:00</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Контактная информация</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">ул. Богдана Благославенного, д.26, Дэпилгтон</a></li>
                        <li><a href="#" class="py-2 d-block">+234-2415-63-63</a></li>
                        <li><a href="#" class="py-2 d-block">krujechka_pokemonov@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | With <i class="icon-heart" aria-hidden="true">

                    </i> by <a href="https://vk.com/krujechka_pokemonov" target="_blank">Krujechka</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

