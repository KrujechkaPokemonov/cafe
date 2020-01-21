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

            <br>
            <h4 align="right">Цены указаны в рублях</h4>
            <br>

</section>

<section class="ftco-section-2">
        <a onclick="$('#spol').slideToggle('slow');" href="javascript://"><img src="/public/images/034.jpg" alt=""></a>
</section>

<div id="spol" style="display:none">
                <section class="ftco-section-2">
                        <a onclick="$('#spol2').slideToggle('slow');" href="javascript://"><img src="/public/images/123.jpg" alt=""></a>
                </section>

                <div id="spol2" style="display:none">
                    <section class="ftco-section-2">
                        <div class="container d-flex">
                            <div class="text col-lg-12 ftco-animate">

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol5').slideToggle('slow');" href="javascript://"><font color="black" size="10">Десерты</font></a>
                                </section>
                                <div id="spol5" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Фирменные эклеры ресторана> 150</font>
                                                <p>(выбери любимый вкус: черная смородина, фисташка, ваниль, карамель или манго)</p>

                                                <font color="black" size="5">Пять эклеров с разной начинкой в специальной подарочной упаковке > 750</font><br><br>

                                                <font color="black" size="5">Шоколадный десерт с миндалем > 350</font>
                                                <p>(шоколадный мусс, миндаль в мягкой карамели, шоколадный бисквит)</p>

                                                <font color="black" size="5">Фундучная карамель > 250</font>
                                                <p>(шоколадный бисквит, карамельный мусс с вафельной крошкой, фундучным пралине и молочным шоколадом)</p>

                                                <font color="black" size="5">Мороженое (1 шарик) > 100</font>
                                                <p>(Ванильное, клубничное, шоколадное, фисташковое)</p>
                                        </div>
                                        </div>
                                    </section>
                                </div>

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol8').slideToggle('slow');" href="javascript://"><font color="black" size="10">Гарнир</font></a>
                                </section>
                                <div id="spol8" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Овощной рататуй > 250</font><br><br>


                                                <font color="black" size="5">Молодой картофель с розмарином > 170</font><br><br>

                                                <font color="black" size="5">Треска под цитрусовым маринадом> 350</font>
                                                <p>(Запеченое Филе трески под цитрусовым маринадом, подается с картофельным пюре, помидором гриль и с пюре из сельдерея)</p>

                                                <font color="black" size="5">Котлеты куриные с картофельным пюре > 150</font>
                                                <p>(Подаются с соусом Тар Тар)</p>

                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol9').slideToggle('slow');" href="javascript://"><font color="black" size="10">Супы</font></a>
                                </section>
                                <div id="spol9" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Суп куриный с вермишелью и фрикадельками> 370</font>
                                            </div>
                                        </div>
                                    </section>
                                </div>


                                <section class="ftco-section-2">
                                    <a onclick="$('#spol10').slideToggle('slow');" href="javascript://"><font color="black" size="10">Паста</font></a>
                                </section>
                                <div id="spol10" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Лапша в азиатском стиле > 250</font>
                                                <p>(китайская лапша с овощами и тигровыми креветками)</p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <section class="ftco-section-2">
                    <a onclick="$('#spol3').slideToggle('slow');" href="javascript://"><img src="/public/images/234.jpg" alt=""></a>
                </section>
                <div id="spol3" style="display:none">
                    <section class="ftco-section-2">
                        <div class="container d-flex">
                            <div class="text col-lg-12 ftco-animate">
                                <section class="ftco-section-2">
                                    <a onclick="$('#spol11').slideToggle('slow');" href="javascript://"><font color="black" size="10">Коктейли</font></a>
                                </section>
                                <div id="spol11" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Глинтвейн 200 мл.> 350</font><br><br>

                                                <font color="black" size="5">Мохито 300 мл.> 400</font>
                                                <p>(Белый ром, сок лайма, мята, сироп, содовая)</p>

                                                <font color="black" size="5">Маргарита Классическая 130 мл.> 300</font>
                                                <p>(Текила, Куантро, лаймовый сок)</p>

                                                <font color="black" size="5">Пина колада 300 мл.> 550</font>
                                                <p>(Ром светлый, кокосовый сироп, ананасовый сок))</p>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol12').slideToggle('slow');" href="javascript://"><font color="black" size="10">Ликёры</font></a>
                                </section>
                                <div id="spol12" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Бейлиз 1000 / 50 мл.> 3500 / 180 </font><br><br>

                                                <font color="black" size="5">Куантро 1000 / 50 мл.> 3200 / 160</font>

                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol13').slideToggle('slow');" href="javascript://"><font color="black" size="10">Ром</font></a>
                                </section>
                                <div id="spol13" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Бакарди Оакхарт Пряный 1000 / 50 мл.> 3300 / 170 </font>
                                            </div>
                                        </div>
                                    </section>
                                </div>


                                <section class="ftco-section-2">
                                    <a onclick="$('#spol14').slideToggle('slow');" href="javascript://"><font color="black" size="10">Текила</font></a>
                                </section>
                                <div id="spol14" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Камино Реал Бланко 700 / 50 мл.>  3050 / 220</font><br><br>

                                                <font color="black" size="5">Кампо Азул Эспесьял бланко 1000 / 50 мл.> 3200 / 170</font>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <section class="ftco-section-2">
                                    <a onclick="$('#spol15').slideToggle('slow');" href="javascript://"><font color="black" size="10">Коньяк</font></a>
                                </section>
                                <div id="spol15" style="display:none">
                                    <section class="ftco-section-2">
                                        <div class="container d-flex">
                                            <div class="text col-lg-12 ftco-animate">
                                                <font color="black" size="5">Хеннесси 700 / 50 мл.> 8850 / 640</font><br><br>

                                                <font color="black" size="5">Курвуазье 700 / 50 мл.> 7200 / 520</font>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

    <section class="ftco-section-2">
        <a onclick="$('#spol6').slideToggle('slow');" href="javascript://"><img src="/public/images/067.jpg" alt=""></a>
    </section>
    <div id="spol6" style="display:none">
        <section class="ftco-section-2">
            <div class="container d-flex">
                <div class="text col-lg-12 ftco-animate">
                    <section class="ftco-section-2">
                        <a onclick="$('#spol16').slideToggle('slow');" href="javascript://"><font color="black" size="10">Свежевыжатый сок</font></a>
                    </section>
                    <div id="spol16" style="display:none">
                        <section class="ftco-section-2">
                            <div class="container d-flex">
                                <div class="text col-lg-12 ftco-animate">
                                    <font color="black" size="5">Апельсиновый 200 мл.> 350</font><br><br>

                                    <font color="black" size="5">Грейпфрутовый 200 мл.> 350 </font><br><br>

                                    <font color="black" size="5">Апельсиново-грейпфрутовый 200 мл.> 350</font><br><br>

                                    <font color="black" size="5">Яблочный 200 мл.> 350</font><br><br>

                                    <font color="black" size="5">Яблочно-морковный 200 мл.> 350</font><br><br>

                                    <font color="black" size="5">Ананасовый 200 мл.> 350 </font>
                                </div>
                            </div>
                        </section>
                    </div>

                    <section class="ftco-section-2">
                        <a onclick="$('#spol17').slideToggle('slow');" href="javascript://"><font color="black" size="10">Кофе</font></a>
                    </section>
                    <div id="spol17" style="display:none">
                        <section class="ftco-section-2">
                            <div class="container d-flex">
                                <div class="text col-lg-12 ftco-animate">
                                    <font color="black" size="5">Эспрессо 40 мл.> 220</font><br><br>

                                    <font color="black" size="5">Двойной эспрессо 80 мл.> 280</font><br><br>

                                    <font color="black" size="5">Американо 200 мл.> 220</font><br><br>

                                    <font color="black" size="5">Каппучино 200 мл.> 280</font><br><br>

                                    <font color="black" size="5">Двойной Каппучино 240 мл.> 330</font><br><br>

                                    <font color="black" size="5">Латте 250 мл.> 280</font><br><br>

                                    <font color="black" size="5">Кофе Гляссе 240 мл.>  300</font>
                                    <p>(Эспрессо с молоком и ванильным мороженым) </p>

                                    <font color="black" size="5">Какао 220 мл.>  290</font>
                                </div>
                            </div>
                        </section>
                    </div>

                    <section class="ftco-section-2">
                        <a onclick="$('#spol18').slideToggle('slow');" href="javascript://"><font color="black" size="10">Чай в чайнике</font></a>
                    </section>
                    <div id="spol18" style="display:none">
                        <section class="ftco-section-2">
                            <div class="container d-flex">
                                <div class="text col-lg-12 ftco-animate">
                                    <font color="black" size="5">Лесные ягоды 500 мл.> 490</font>
                                    <p>(Пюре смородины, апельсиновый сок, сироп ежевика) </p>

                                    <font color="black" size="5">Восточные пряности 500 мл.> 490</font>
                                    <p>(Апельсин, лайм, мед, мята, корица, гвоздика) </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<section class="ftco-section-2">
        <a onclick="$('#spol1').slideToggle('slow');" href="javascript://"><img src="/public/images/056.jpg" alt=""></a>
</section>

<div id="spol1" style="display:none">
    <section class="ftco-section-2">
        <div class="container d-flex">
                <div class="text col-lg-12 ftco-animate">
                        <h4 class="heading" align="left">Курица с рисом и овощами</h4>
                        <p align="justify">Нежное измельченное филе курицы, в сочетании риса и моркови.</p>
                        <h4 class="heading" align="left">Лосось с рисом</h4>
                        <p align="justify">Сочетание лосося, приготовленного на пару, отварного риса и 1 таблетки витаминно-минерального комплекса.</p>
                        <h4 class="heading" align="left">Печеночный праздник</h4>
                        <p align="justify">Тонко нарезанная говяжья или куриная печень, подается с отварной овсяной крупой и приготовленного на пару зеленого горошка.</p>
                        <h4 class="heading" align="left">Тунец на обед</h4>
                        <p align="justify">Сочетание пряного тунца, сладких нот моркови и отварного риса.</p>
                        <h4 class="heading" align="left">Говядина с овощами</h4>
                        <p align="justify">Нежный фарш из говядины в сочетании с морковью, брокколи и рисом, подаются в сыром виде.</p>
                        <h4 class="heading" align="left">Грибной паштет «Лакомка»</h4>
                        <p align="justify">Отварные куриные сердца и печень, в сочетании с овсяными хлопьями, с добавлением грибов, мелко измельчаются в блендере.</p>
                        <h4 class="heading" align="left">Куриный паштет</h4>
                        <p align="justify">Нежная куриная грудка перемалываются в мясорубке, с добавлением куриного бульона.</p>
                        <h4 class="heading" align="left">Говяжьи тефтели</h4>
                        <p align="justify">В мясорубке перекручиваются: рис, говядина и овощи.</p>
                        <h4 class="heading" align="left">Мороженое «Пушистик»</h4>
                        <p align="justify">Нежирный творог и кефир смешивается и замораживаются.</p>
                        <h4 class="heading" align="left">Печёночное печенье курица/говядина</h4>
                        <p align="justify">Перемолотое мясо смешивается с овсяной мукой, все запекается до хрустящей корочки.</p>
                        <h4 class="heading" align="left">Рыбные палочки</h4>
                        <p align="justify">Ароматный тунец в собственном соку смешивается с рисовой мукой и сырым яйцом и выпекается лёгкой корочки.</p>
                        <h4 class="heading" align="left">Хворост из рыбы</h4>
                        <p align="justify">Охлажденное филе рыбы, нарезается соломкой и высушивается в духовке.</p>
                </div>
        </div>
    </section>
</div>