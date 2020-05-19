<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

    <section class="home-slider owl-carousel img" style="background-image: url(/public/images/fon-3.jpg);">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 text-center heading-section ftco-animate">
                        <h1>KissKiss</h1>
                        <h2>Залы ресторана</h2>
                        <p><a href="/site/reservation" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Забронировать столик</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END slider -->

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
        <section class="ftco-section-2">
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