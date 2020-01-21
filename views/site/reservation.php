<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>


<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Бронирование</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 ftco-animate img" style="background-image: url(/public/images/broni.jpg);"></div>
            <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Имя</label>
                                <input type="text" class="form-control" placeholder="Введите имя">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Зал</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Зал</option>
                                        <option value="">Крыша</option>
                                        <option value="">Диван</option>
                                        <option value="">Подвал</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Телефон</label>
                                <input type="text" class="form-control" placeholder="Введите телефон">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Дата</label>
                                <input type="text" class="form-control" id="book_date" placeholder="Выберите дату">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Время</label>
                                <input type="text" class="form-control" id="book_time" placeholder="Выберите время">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Персон</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Персон</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <input type="submit" value="Забронировать" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
