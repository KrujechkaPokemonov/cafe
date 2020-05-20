<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<section class="home-slider owl-carousel img" style="background-image: url(/public/images/fon-1.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h1>KissKiss</h1>
                    <p><a href="/site/reservation" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Забронировать столик</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(/public/images/index-1.jpeg);"></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">Добро пожаловать в <font color="#c55bfa">KissKiss</font> ресторан</h2>
        </div>
        <div>
            <font size="4px">KissKiss - это уникальный ресторан, место, где ты счастлив! А всё из-за того, что в нашем ресторане вы можете провести своё время не один,
                а с пушистыми мурлыкающими питомцами! Приятная музыка, вкусная еда, мурлыкающие друзья. Всё это невозможно остановить, это мгновения,
                ради которых мы живем и для которых мы построили «KissKiss».

                <br><br>Есть KissKiss, есть повод встретиться…<br><br>

                KissKiss – место, где можно сидеть часами, наблюдая за красивым видом из окна, мелькающими мимо людьми или за погодой. Вы можете не только посидеть с нашими питомцами, но и прийти со своим!</font></div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4"><font color="white" size="7">Наш сервис</font></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/cat.png" alt="KissKiss"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Пушистые питомцы</font></h3>
                        <font color="white" size="4"> <p>В нашем ресторане вы можете провести своё время не одни, а со своими питомцами или питомцами нашего ресторана!</p></font>
                        </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/cup.png" alt="KissKiss"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Бесплатный Wi-Fi</font></h3>
                        <font color="white" size="4"><p>Бесплатный wi-fi всем нашим посетителям, чтобы вам было комфортно работать или проводить своё время в нашем ресторане.</p></font>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/kitchen.png" alt="KissKiss"></span></div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Шеф-повар</font></h3>
                        <font color="white" size="4"> <p>Наш шеф-повар и его команда приготовят вам вкусные блюда.</p> </font>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/game.png" alt="KissKiss"></span></div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Консольные игры</font></h3>
                        <font color="white" size="4"><p>Вы всегда можете сыграть в PlayStation 4 или Xbox One X за отдельную платную в цокольном этаже нашего ресторана!</p></font>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/rounded.png" alt="KissKiss"></span></div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Обслуживание</font></h3>
                        <font color="white" size="4"><p>Наши вежливые официанты и бармены смогут вам помочь во многих вопросах о нашем ресторане, но так же будьте вежливы и к ним!</p></font>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span><img src="/public/images/hands.png" alt="KissKiss"></span></div>
                    <div class="media-body">
                        <h3 class="heading"><font color="white" size="5">Мойте руки</font></h3>
                        <font color="white" size="4"> <p>Пожалуйста, прежде чем приступить к пище, помойте свои руки! И после того как играли с нашими питомцами тоже!</p></font>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Новости ресторана</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($articles as $article):?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <img src="<?= $article->getImage();?>" alt="">
                        <div class="text py-4 d-block">
                            <h3 class="heading mt-2"></h3>
                            <font color="white" size="4"><p><?= $article->title?></p></font>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


