<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<!-- Reservation -->
<div class="ftco-section-reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 reservation pt-5 px-5">
                <div class="block-17">
                    <form action="" method="post" class="d-block d-lg-flex">
                        <div class="fields d-block d-lg-flex">

                            <div class="textfield-name one-third"><input type="text" class="form-control" placeholder="Имя"></div>

                            <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Телефон"></div>

                            <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY"></div>

                            <div class="book-time one-third">
                                <input type="text" id="book_time" class="form-control" placeholder="Время">
                            </div>

                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Зал</option>
                                    <option value="">Крыша</option>
                                    <option value="">Диван</option>
                                    <option value="">Подвал</option>
                                </select>
                            </div>

                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                    <option value="">Персон</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="search-submit btn btn-primary" value="Бронь">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Reservation -->

<!-- About -->
<section class="ftco-section-2">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
            <div class="img col-sm-12 col-lg-6" style="background-image: url('public/images/about-6.jpg');">
            </div>
            <div class="text col-lg-6 ftco-animate">
                <div class="text-inner align-self-start">
                    <h3 class="heading" align="center">О НАС</h3>
                    <p align="justify">KissKiss - это уникальный ресторан, место, где ты счастлив! А всё
                        из-за того, что в нашем ресторане вы можете провести своё время не один, а с пушистыми мурлыкающими
                        питомцами! Приятная музыка, вкусная еда, мурлыкающие друзья. Всё это невозможно остановить,
                        это мгновения, ради которых мы живем и для которых мы построили «KissKiss».</p>

                    <p align="justify">Есть KissKiss, есть повод встретиться…
                    </p>

                    <p align="justify">KissKiss – место, где можно сидеть часами, наблюдая за красивым видом из окна,
                        мелькающими мимо людьми или за погодой. Вы можете не только посидеть с нашими питомцами, но и
                        прийти со своим!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END About -->

<section class="ftco-section-2">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">

            <div class="text col-lg-6 ftco-animate">
                <div class="text-inner align-self-start">
                    <h3 class="heading" align="center">ШЕФ-ПОВАР</h3>
                    <p align="justify">Альберт Иванович начинал свой путь в академии поваров. На данный момент в его
                        профессиональной биографии-более десятка лет в кулинарном деле, а также практика в
                        престижных ресторанах Северной столицы. Проводил мастер-классы молекулярной
                        кухни для членой британской королевской семьи, стал почётным участником фестиваля
                        европейской кухни. Имеет «звезду Мишлена», а также лично разработал уникальное и
                        сбалансированное меню, блюда которого можно отведать только в «KissKiss».</p>
                </div>
            </div>
            <div class="img col-sm-12 col-lg-6" style="background-image: url('public/images/about-7.jpg');">
            </div>
        </div>
</section>

<!-- Reklama -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Новости</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="carousel1 owl-carousel ftco-owl">
                <?php foreach($articles as $article):?>
                <div class="item">
                    <div class="blog-entry">
                        <a href="/" class="block-20");">
                            <img src="<?= $article->getImage();?>" alt="">
                        </a>
                        <div class="text p-4">
                            <h3 class="heading"><?= $article->title?></a></h3>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--END Reklama -->
<!-- loader -->
