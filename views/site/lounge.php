<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<!-- Broni -->
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
                                    <option value="">4+</option>
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
<!-- END Broni -->

<section class="ftco-section-2">
    <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
            <br>
            <h3 align="justify">Мы разработали три зала на каждом этаже ресторана «KissKiss»,
                чтобы нашим гостям было комфортно проводить своё время у нас.
                Каждый гость может выбрать тот зал, в котором ему будет уютней всего.</h3>
            <br>
        </div>
    </div>
</section>

<section class="ftco-section-2">
    <a onclick="$('#spol').slideToggle('slow');" href="javascript://"><img src="/public/images/01234.jpg" alt=""></font></a>
</section>

<div id="spol" style="display:none">
    <section class="ftco-section-2">
        <div class="container d-flex">
            <div class="section-2-blocks-wrapper row">
                <div class="img col-sm-12 col-lg-6" style="background-image: url('/public/images/about-1.jpg');">
                </div>
                <div class="text col-lg-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3 class="heading" align="center">Крыша</h3>
                        <p align="justify"> Этот этаж для тех кто любит хорошо провести своё время на свежем воздухе и
                            под хорошую музыку. Заказать еду и напитки вы сможете либо за барной стойкой, либо за
                            любым другим столиком.</p>
                        <p align="justify">Всего на этаже 5 столиков, каждый на 4 персоны.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="ftco-section-2">
    <a onclick="$('#spol1').slideToggle('slow');" href="javascript://"><img src="/public/images/0234.jpg" alt=""></a>
</section>

<div id="spol1" style="display:none">
    <section class="ftco-section-2">
        <div class="container d-flex">
            <div class="section-2-blocks-wrapper row">
                <div class="text col-lg-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3 class="heading" align="center">Диваны</h3>
                        <p align="justify"> Данный зал создан для более уютного времяпрепровождения. Например, деловые
                            встречи, свидания или простые посиделки с друзьями. Если вам одиноко, то не переживайте,
                            в ресторане есть много пушистых мурлыкающих друзей, которые могут вам подарить счастье.</p>
                        <p align="justify">Также вы можете прийти со своим пушистым мурлыкающим другом и провести своё время в нашем
                            уютном ресторане! Ваш котёнок не останется голодным, ведь у нас есть сбалансированное
                            меню специально созданное для кошек!</p>

                        <p align="justify">Всего на этаже 5 столиков, каждый на 4 персоны.</p>
                    </div>
                </div>
                <div class="img col-sm-12 col-lg-6" style="background-image: url('/public/images/about-5.jpg');">
                </div>
            </div>
        </div>
    </section>
</div>

<section class="ftco-section-2">
    <a onclick="$('#spol2').slideToggle('slow');" href="javascript://"><img src="/public/images/0345.jpg" alt=""></a>
</section>

<div id="spol2" style="display:none">
    <section class="ftco-section-2">
        <div class="container d-flex">
            <div class="section-2-blocks-wrapper row">
                <div class="img col-sm-12 col-lg-6" style="background-image: url('/public/images/about-4.jpg');">
                </div>
                <div class="text col-lg-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3 class="heading" align="center">Подвал</h3>
                        <p align="justify"> Зал для тех кто хочет расслабиться после тяжёлого дня. Здесь вы можете
                            заказать кальян. Цена кальяна зависит от того сколько персон сидит за столом.Стартовая цена-700 рублей. За каждую персону в вашей компании доплата в
                            размере 100 рублей за каждый час. Еду и напитки вы можете заказать за барной стойкой
                            или за столиком.</p>

                        <p align="justify">Всего на этаже 3 столика и 3 дивана, на 4 персоны.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>