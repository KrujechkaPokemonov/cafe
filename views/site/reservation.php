<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
//use Yii;
?>


<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Бронирование</h2>
            </div>
        </div>
        <?php if(Yii::$app->session->hasFlash('reservation-status')):?>
            <?php if(Yii::$app->session->getFlash('reservation-status')):?>
                <div class="alert alert-success">
                    Запрос на бронирование отправлен успешно. Ожидайте звонка от модератора сайта!
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    Запрос на бронирование не отправлен! Проверьте своё подключение к сети или попробуйте позднее.
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <div class="row d-flex">
            <div class="col-md-4 ftco-animate img" style="background-image: url('/public/images/broni.jpg');"></div>
            <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
                <form action="<?php echo Url::toRoute('site/reservation'); ?>" method="post" >
                    <input type="text" name="_csrf" value="<?php echo \Yii::$app->request->csrfToken; ?>" hidden>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Имя</label>
                                <input type="text" class="form-control" name="Reservation[name]" placeholder="Введите имя">
                            </div>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Телефон</label>
                                <input type="text" id="phone" name="Reservation[phone]" class="form-control" placeholder="Введите телефон">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Дата</label>
                                <input type="text" class="form-control" name="Reservation[date]" id="book_date" placeholder="Выберите дату">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Время</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select  id="" class="form-control" name="Reservation[time]">
                                        <option value="1">Выберите время</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                    </select>
                                </div>
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
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <input type="submit" value="Забронировать" name="send" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script>
    $(document).ready(function() {
        $("#phone").mask("8 (999) 999-99-99");
    });
</script>