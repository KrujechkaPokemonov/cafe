<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
//use Yii;
?>

<section class="home-slider owl-carousel img" style="background-image: url(/public/images/fon-3.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h1 ">KissKiss</h1>
                    <h2>Бронирование</h2>
                    <p><a href="/site/lounge" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Посмотреть столики</a></p>
                     </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-4 d-flex ">
                <img src="/public/images/game1.png" alt="KissKiss">
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Бронирование столика</h3>

                <?php if(Yii::$app->session->hasFlash('reservation-status')):?>
                    <?php if(Yii::$app->session->getFlash('reservation-status')):?>
                        <div class="alert alert-success">
                            Запрос на бронирование отправлен успешно. Ожидайте звонка от модератора сайта!
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            Запрос на бронирование не отправлен! <br>Вы не заполнили все поля! Заполните все поля и попробуйте отправить запрос ещё раз.<br>Если поля были заполнены, а ошибка всё равно появилась проверьте подключение к сети или попробуйте отправку запроса позднее!
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <form action="<?php echo Url::toRoute('site/reservation'); ?>" method="post" class="row">
                    <input type="text" name="_csrf" value="<?php echo \Yii::$app->request->csrfToken; ?>" hidden>

                    <div class="col-12 row d-flex justify-content-center align-items-end">

                        <div class="form-group col-6">
                            <label for="">Имя</label>
                            <input type="text" class="form-control" name="Reservation[name]" placeholder="Введите имя">
                        </div>
                        <div class=" col-6">
                            <div class="form-group">
                                <label for="">Зал</label>
                                <div class="select-wrap one-third ">
<!--                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                    <select name="Reservation[id_lounge]" id="" class="form-control">
                                        <?php foreach ($lounges as $lounge) : ?>
                                            <option value="<?= $lounge->id ?>"><?= $lounge->title ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 row">
                        <div class="form-group col-6">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" id="datepicker" class="form-control appointment_date" name="Reservation[date]"  placeholder="Выберите дату">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <select  id="" class="form-control" name="Reservation[time]" >
                                    <option value="13.30">13.30</option>
                                    <option value="14.30">14.30</option>
                                    <option value="15.30">15.30</option>
                                    <option value="16.30">16.30</option>
                                    <option value="17.30">17.30</option>
                                    <option value="18.30">18.30</option>
                                    <option value="19.30">19.30</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 row d-flex justify-content-center align-items-end">
                        <div class="form-group col-6">
                            <label for="">Персон</label>
                            <div class="select-wrap one-third">
<!--                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <select  id="" class="form-control" name="Reservation[person]" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Телефон</label>
                            <input type="text" id="phone" name="Reservation[phone]" class="form-control" placeholder="Введите телефон">
                        </div>
                        <div class="form-group col-6">
                            <label for="">E-mail</label>
                            <input type="text" id="email" name="Reservation[email]" class="form-control" placeholder="Введите e-mail">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Столик</label>
                            <div class="select-wrap one-third">
                                <select  id="" class="form-control" name="Reservation[id_booktable]" >
                                    <?php foreach ($booktables as $booktable) : ?>
                                        <option value="<?= $booktable->id ?>"><?= $booktable->title ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group col-6 mx-auto">
                        <input type="submit" value="Забронировать" name="send" class="btn btn-primary py-3 px-4">
                    </div>
            </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

