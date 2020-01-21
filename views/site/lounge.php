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

<?php $i = 1; foreach($lounge as $section) : ?>

    <section class="ftco-section-2">
        <a onclick="$('#spol<?php echo $i ?>').slideToggle('slow');" href="javascript://"><img src="/public/images/<?php echo $images[$i - 1]?>" alt=""></a>
    </section>

    <div id="spol<?php echo $i ?>" style="display:none">
        <section class="ftco-section-<?php echo $i ?>">
            <div class="container d-flex">
                <div class="section-2-blocks-wrapper row">
                    <div class="img col-sm-12 col-lg-6" style="background-image: url('/uploads/<?= $section->image?>');">
                    </div>
                    <div class="text col-lg-6 ftco-animate">
                        <div class="text-inner align-self-start">
                            <h3 class="heading" align="center"><?= $section->title ?></h3>
                            <p align="justify"> <?=$section->description ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <?php $i++; endforeach; ?>