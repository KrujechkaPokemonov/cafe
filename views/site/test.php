
<section class="home-slider owl-carousel img" style="background-image: url(/public/images/fon-2.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-7 col-sm-12 ftco-animate">
                    <h1 class="mb-4">KissKiss</h1>
                    <h2 class="mb-4">Меню ресторана</h2>
                    <p><a href="/site/reservation" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Забронировать столик</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section-2">

    <br>
    <h1 align="center">Цены указаны в рублях</h1>
    <br>

</section>

<?php
$ml = 0;
$j = 0;

//function renderItem($item, $number)
//{
//    echo '
//    <section class="ftco-section-2">
//        <a onclick="$(\'#spol\').slideToggle(\'slow\');" href="javascript://"><img src="/public/images/034.jpg" alt=""></a>
//    </section>
//    ';
//}

function renderItems($items, $number, &$j)
{
    $number++;
    foreach($items as $item)
    {
        $j++;

    ?>

        <div style="margin-left: <?php echo 20*$number;?>px">
            <section class="ftco-section-2 container d-flex">
                <a onclick="$('#spol<?php echo $j ?>').slideToggle('slow');" href="javascript://"><font size="8"> <?php echo $item->name ?></font></a>
            </section>
            <div class="text col-lg-12 ftco-animate" id="spol<?php echo $j ?>" style="display: none;">
                <?php renderItems($item->menuitems, $number, $j); ?>
            </div>
        </div>

    <?php

    }
}
?>
<?php renderItems($menu, $ml, $j); ?>


