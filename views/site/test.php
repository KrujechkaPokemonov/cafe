
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
<br>
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


