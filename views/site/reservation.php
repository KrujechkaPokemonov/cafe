<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
//use Yii;
?>

<section class="home-slider owl-carousel img" style="background-image: url(/public/images/fon-4.jpg);">
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 text-center heading-section ftco-animate">
                    <h1 ">KissKiss</h1>
                    <h2>Бронирование</h2>
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
            <div class="col-md-6 d-flex align-self-stretch">

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

                <form action="<?php echo Url::toRoute('site/reservation'); ?>" method="post" >
                    <input type="text" name="_csrf" value="<?php echo \Yii::$app->request->csrfToken; ?>" hidden>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Reservation[name]" placeholder="Имя">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Зал</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="Reservation[id_lounge]" id="" class="form-control">
                                        <?php foreach ($lounges as $lounge) : ?>
                                            <option value="<?= $lounge->id ?>"><?= $lounge->title ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control" name="Reservation[date]" id="book_date" placeholder="Выберите дату">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control" name="Reservation[time]" id="book_time" placeholder="Выберите время">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" id="phone" name="Reservation[phone]" class="form-control" placeholder="Введите телефон">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Персон</label>
                            <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select  id="" class="form-control" name="Reservation[person]" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ml-md-4">
                        <input type="submit" value="Забронировать" name="send" class="btn btn-primary py-3 px-4">
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</section>