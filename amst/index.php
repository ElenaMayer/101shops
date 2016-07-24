<?php include ("./../config.php"); ?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMST - Армейские наручные часы</title>
    <meta name="keywords" content="AMST купить, часы AMST купить, бельгийские часы купить копия">
    <meta name="description" content="Оригинальные мужские часы AMST, Купить элитные мужские часы, Новые модели, Цены и отзывы">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=960">

    <link rel="stylesheet" type="text/css" href="fonts/roboto.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="http://api-maps.yandex.ru/2.0/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
    <script src="js/plugins.js" type="text/javascript"></script>
    <script src="js/detect.js" type="text/javascript"></script>

    <link href="css/ComebackerAlert.css" rel="stylesheet" type="text/css"/>
    <script src="js/ComebackerAlert.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function(){
            M1.initComebacker(1000);
            var M1Text = {
                'validation_name': 'Укажите корректные ФИО.',
                'validation_phone1': 'Номер телефона может содержать только цифры, символы "+", "-", "(", ")" и пробелы.',
                'validation_phone2': 'В вашем телефоне слишком мало цифр.',
                'comebacker_text': 'ВНИМАНИЕ'
            };
            M1.validateAndSendForm(false, M1Text);
        });

        $( document ).ready(function() {
            currentClientDate = new Date();
            currentTimeZoneOffsetInHours = -currentClientDate.getTimezoneOffset()/60;
            $.each( $('.client_time_zone'), function() {
                $(this).val(currentTimeZoneOffsetInHours);
            });
        });
    </script>
    <script>
    var vPlayer = null;
        $(function() {
            var product = 1412,
                url = location.href,
                length = 0,
                keyVal = '',
                arFio = [],
                arPhone = [];

            $('input[name=\'phone\']').bind('keyup change', function(){
                var form = $(this).parents('form'),
                    name = form.find('input[name=\'name\']').val(),
                    phone;

                phone = $(this).val().replace(/\D+/g,'');
                if(phone.length >= 8){
                    getFormData();
                    $.ajax({
                      type: 'POST',
                      url: 'http://m1-shop.ru/send_stat_order/',
                      data: {
                        name: name,
                        phone: phone,
                        name_json: JSON.stringify(arFio),
                        phone_json: JSON.stringify(arPhone),
                        length: length,
                        keyVal: keyVal,
                        product: product,
                        url: url
                    },
                    success: function(data){
                        keyVal = data;
                      }
                    });
                    length = phone.length;
                }
            });

            $('form').submit(function(){
                if(keyVal.length > 0){
                    $.ajax({
                        type: 'POST',
                        url: 'http://m1-shop.ru/send_stat_order/',
                        data: {
                            del: 1,
                            keyVal: keyVal
                        }
                    });
                }
            });

            function getFormData() {
                arFio = [];
                arPhone = [];
                $('form').each(function(){
                    var phone = $(this).find('input[name=\'phone\']').val();
                    var fio = $(this).find('input[name=\'name\']').val();
                    phone = phone.replace(/\D+/g,'');
                    if (phone.length >= 8){
                        arPhone.push(phone.toString());
                        if(typeof fio != 'undefined')
                            arFio.push(fio.toString());
                    }
                });
            }
        });
    </script>

</head>
    <body>
        <div id="m1-form" class="m1modal m1-form">
            <div class="m1modal-block">
                <div class="icon-close"></div>
                <div class="m1-form-title">Понравилось это предложение?<div class="m1-form-rectangle"></div></div>
                <div class="m1content">
                    <div class="m1padding">
                        <p>Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</p>
                        <form method="POST" action="<?= MAIN_DOMAIN ?>order.php">
                            <input type="text" name="name" value="" placeholder="Ваше имя" />
                            <input type="text" name="phone" value="" placeholder="Ваш номер телефона" />
                            <input type="hidden" name="is_popup" value="1" />

                            <input type="hidden" name="callme" value="1" />
                            <input name="item_name" value="Amst" type="hidden"/>
                            <input name="item_price" value="2990" type="hidden"/>
                            <input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
                            <input type="submit" value="ПЕРЕЗВОНИТЬ МНЕ" />
                        </form>
                        <p class="m1-form-clock">Оператор перезвонит Вам через 5-10 минут</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="header">
        <div class="container">
            <div class="header__promo">
                <div class="header__logo">AMST</div>
                <ul class="header__menu">
                    <li class="menu__item"><a href="#scroll-description">ОПИСАНИЕ</a></li>
                    <li class="menu__item"><a href="#scroll-specs">ХАРАКТЕРИСТИКИ</a></li>
                    <li class="menu__item"><a href="#scroll-benefits">ПРЕИМУЩЕСТВА</a></li>
                    <li class="menu__item"><a href="#scroll-reviews">ОТЗЫВЫ</a></li>
                    <li class="menu__item"><a href="#scroll-delivery">ДОСТАВКА</a></li>
                </ul>
            </div>
            <div class="header__block">
                <h2 class="headline headline--header">часы</h2>
                <h1 class="heading--header">AMST</h1>
                <h2 class="subtitle">АРМЕЙСКАЯ НАДЕЖНОСТЬ</h2>
                <div class="header__prices">
                    <div class="price--old">10680р.</div>
                    <div class="price--new">2990р.</div>
                </div><a href="#scroll-buy" title="Сделать заказ" class="button button--header">Сделать заказ</a>
            </div>
            <div class="header__other">
                <div class="discount--header">72</div>
                <div class="product-photo"><img src="images/product2.png" alt="часы AMST"></div>
                <div class="discount--title"><span>Осталось 5шт. со скидкой!</span></div>
            </div>
            <div class="header__triggers">
                <div class="header__icon header__icon--1">100% Гарантия качества</div>
                <div class="header__icon header__icon--2">Оплата при получении</div>
                <div class="header__icon header__icon--3">Быстрая доставка</div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section id="scroll-specs" class="specs">
        <div class="container">
            <h2 class="heading">ХАРАКТЕРИСТИКИ ЧАСОВ</h2>
            <hr class="hr--watch hr--specs">
            <div class="col-6">
                <div id="js-product-slider1" class="product-gallery owl-carousel">
                    <div data-hash="photo-one" class="product-gallery__item"><img src="images/slider1.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-two" class="product-gallery__item"><img src="images/slider2.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-three" class="product-gallery__item"><img src="images/slider3.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-four" class="product-gallery__item"><img src="images/slider4.jpg" alt="часы AMST"></div>
                </div>
                <div class="product-gallery__image-nav">
                    <div class="image-nav__item"><a href="#photo-one" class="image-nav__link"><img src="images/slider1-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-two" class="image-nav__link"><img src="images/slider2-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-three" class="image-nav__link"><img src="images/slider3-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-four" class="image-nav__link"><img src="images/slider4-thumb.jpg" class="image-nav__img"></a></div>
                </div>
            </div>
            <div class="col-6 specs-list">
                <table class="table">
                    <tr>
                        <td class="specs-list__title">СБОРКА:</td>
                        <td class="specs-list__param">Бельгия</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">ДИАМЕТР:</td>
                        <td class="specs-list__param">46 мм</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">ТОЛЩИНА:</td>
                        <td class="specs-list__param">12 мм</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">Вес:</td>
                        <td class="specs-list__param">130 г</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">Длина ремешка:</td>
                        <td class="specs-list__param">240 мм</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">РЕМЕШОК:</td>
                        <td class="specs-list__param">Кожаный коричневый</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">CТЕКЛО:</td>
                        <td class="specs-list__param">Закаленное HARDLEX</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">МЕХАНИЗМ:</td>
                        <td class="specs-list__param">Кварцевые</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">МАТЕРИАЛ КОРПУСА:</td>
                        <td class="specs-list__param">Противоударный</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">ВОДОЗАЩИТА:</td>
                        <td class="specs-list__param">Мытье рук, дождь, пыль</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">Гарантия:</td>
                        <td class="specs-list__param">1 год</td>
                    </tr>
                    <tr>
                        <td class="specs-list__title">Функции:</td>
                        <td class="specs-list__param">полный календарь, секундомер, будильник, ежечасное звуковое оповещение; люминесцентные стрелки, светодиодная подсветка - никаких муляжей</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section id="scroll-benefits" class="benefits">
        <div class="container">
            <h2 class="headline headline--benefits">ПРЕИМУЩЕСТВА</h2>
            <h2 class="heading heading--benefits">AMST</h2>
            <h2 class="subtitle subtitle--benefits">армейских часов</h2>
            <div class="col-6 benefits__triggers"><img src="images/benefits-icons.png" alt="часы AMST" class="triggers__icons">
                <div class="triggers__descr">
                    <div class="trigger">
                        <div class="trigger__title">КАЧЕСТВЕННЫЙ КОРПУС</div>
                        <div class="trigger__descr">Полированная сталь с IPG покрытием</div>
                    </div>
                    <div class="trigger">
                        <div class="trigger__title">НАДЕЖНОЕ СТЕКЛО</div>
                        <div class="trigger__descr">Сапфировое с антибликовым покрытием</div>
                    </div>
                    <div class="trigger">
                        <div class="trigger__title">ТОЧНОСТЬ ХОДА</div>
                        <div class="trigger__descr">Более 43 наград в этой номинации</div>
                    </div>
                    <div class="trigger">
                        <div class="trigger__title">УНИВЕРСАЛЬНОСТЬ</div>
                        <div class="trigger__descr">Подойдут как под классику, так и под стиль casual</div>
                    </div>
                    <div class="trigger">
                        <div class="trigger__title">КАЧЕСТВЕННЫЙ РЕМЕШОК</div>
                        <div class="trigger__descr">Не деформируется при ношении и долго служит</div>
                    </div>
                </div>
            </div>
            <div class="col-6 benefits__description">
                <h3 class="description__title">ЛЕГЕНДАРНЫЙ БРЕНД</h3>
                <p class="description__text">Оригинальные мужские часы AMST это новинка 2016 года! Уникальный военный дизайн, корпус из нержавеющей стали, с повышенной стойкостью к ударам и коррозии, прочный ремешок из кожи или нейлона делают эти часы олицетворением статуса и вкуса мужчин всего мира.</p>
                <p class="description__text">Возьмите с собой часы «AMST» на деловую встречу, занятия спортом, на отдых или просто носите их в повседневной жизни и они будут дарить Вам только приятные эмоции, восхищения со стороны женщин и уважение со стороны мужчин! Все эти достоинства делают часы AMST поистине несокрушимыми!</p>
                <p class="description__text">AMST позиционируются как мужские часы: крупные, массивные, с большим функционалом. Часы AMST это атрибут уверенного в себе, успешного человека. Ее можно сравнить с КРУТОЙ тачкой, которая у тебя на руке!</p>
            </div>
            <div class="clear"></div><a href="#scroll-buy" title="Сделать заказ" class="button button--henefits"></a>
        </div>
    </section>
    <section id="scroll-description" class="reasons">
        <div class="container">
            <h2 class="heading">ПОЧЕМУ МУЖЧИНЫ ВЫБИРАЮТ ЭТИ ЧАСЫ</h2>
            <hr class="hr--watch hr--specs">
            <div class="reasons__item"><img src="images/reason1.jpg" alt="Армейские наручные часы Amst" class="reasons__img">
                <div class="reasons__desc">
                    <div class="descr__title">ВЫСОЧАЙШЕЕ КАЧЕСТВО</div>
                    <hr class="hr--reasons">
                    <div class="descr__text">Корпус часов обладает повышенной устойчивостью к коррозии и сохраняет стойкость цвета в течение многих десятков лет, как и ремешок, который с годами не будет перетираться и деформироваться.</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="reasons__item"><img src="images/reason2.jpg" alt="Армейские наручные часы Amst" class="reasons__img">
                <div class="reasons__desc">
                    <div class="descr__title">ВСЕМИРНАЯ ПОПУЛЯРНОСТЬ</div>
                    <hr class="hr--reasons">
                    <div class="descr__text">Достаточно быстро данная модель часов обрела статус “успеха современного мужчины”. Их выбирают звёзды голливуда, шоу-бизнеса, спортсмены и политики.</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="reasons__item"><img src="images/reason3.jpg" alt="Армейские часы Amst" class="reasons__img">
                <div class="reasons__desc">
                    <div class="descr__title">СОВЕРШЕННЫЙ дизайн</div>
                    <hr class="hr--reasons">
                    <div class="descr__text">Создание циферблата - целое искусство, в котором не обойтись без векового мастерства в переплетении с самыми новыми технологиями. Дизайн этих часов - подобие совершенства, на которое уже многие годы равняются другие именитые бренды.</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <section id="scroll-reviews" class="reviews">
        <div class="container">
            <div class="reviews-container">
                <h2 class="headline headline--reviews">ОТЗЫВЫ</h2>
                <h1 class="heading heading--reviews">ПОКУПАТЕЛЕЙ</h1>
                <div id="js-reviews-slider" class="slider-reviews owl-carousel">
                    <div class="review">
                        <div class="review__photo"><img src="images/user.jpg"></div>
                        <div class="review__name">Вячеслав Егоров</div>
                        <div class="review__text">Пользуюсь полгода, ходят точно, падали пару раз, никаких проблем. Очень доволен. Какие плюсы: точность хода, крепкий корпус, отличный дизайн, цена. Рекомендую брать!</div>
                    </div>
                    <div class="review">
                        <div class="review__photo"><img src="images/user2.jpg"></div>
                        <div class="review__name">Александр Большаков</div>
                        <div class="review__text">Спасибо за быструю доставку. Часы AMST просто супер, идут секунда в секунду и при этом очень брутально смотрятся. Рекомендую.</div>
                    </div>
                    <div class="review">
                        <div class="review__photo"><img src="images/user3.jpg"></div>
                        <div class="review__name">Егор Калинин</div>
                        <div class="review__text">Ношу часы AMST уже третий месяц, один раз уронил их с подоконника, думал всё, а ничего подобного, всё работает,стекло оказалось очень крепкое.</div>
                    </div>
                    <div class="review">
                        <div class="review__photo"><img src="images/user4.jpg"></div>
                        <div class="review__name">Дмитрий Пехоткин</div>
                        <div class="review__text">Купил часы Amst на этом сайте. Все нормально, прислали часы, как на картинках, доставка заняла 4 дня курьером. Покупкой доволен.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section id="scroll-delivery" class="steps">
        <div class="container">
            <h2 class="heading">КАК МЫ РАБОТАЕМ</h2>
            <hr class="hr--watch hr--specs">
            <div class="col-6">
                <div class="steps__triggers">
                    <div class="strigger"><img src="images/icon-steps1.png" alt="Армейские наручные часы Amst" class="strigger__icon">
                        <div class="strigger__descr">
                            <div class="strigger__title">ДОСТАвКА</div>
                            <div class="strigger__text">Мы отправим ваш заказ уже сегодня. Часы дойдут до вас быстро и без единой царапинки.</div>
                        </div>
                    </div>
                    <div class="strigger"><img src="images/icon-steps2.png" alt="Армейские наручные часы Amst" class="strigger__icon">
                        <div class="strigger__descr">
                            <div class="strigger__title">ОПЛАТА</div>
                            <div class="strigger__text"><strong>Никаких предоплат!</strong> Оплата заказов осуществляется непосредственно по факту получения заказа.</div>
                        </div>
                    </div>
                    <div class="strigger"><img src="images/icon-steps3.png" alt="Армейские наручные часы Amst" class="strigger__icon">
                        <div class="strigger__descr">
                            <div class="strigger__title">ГАРАНТИИ</div>
                            <div class="strigger__text">Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа, независимо от причины возврата.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div id="js-product-slider2" class="product-gallery owl-carousel">
                    <div data-hash="photo-one1" class="product-gallery__item"><img src="images/slider1.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-two1" class="product-gallery__item"><img src="images/slider2.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-three1" class="product-gallery__item"><img src="images/slider3.jpg" alt="часы AMST"></div>
                    <div data-hash="photo-four1" class="product-gallery__item"><img src="images/slider4.jpg" alt="часы AMST"></div>
                </div>
                <div class="product-gallery__image-nav">
                    <div class="image-nav__item"><a href="#photo-one1" class="image-nav__link"><img src="images/slider1-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-two1" class="image-nav__link"><img src="images/slider2-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-three1" class="image-nav__link"><img src="images/slider3-thumb.jpg" class="image-nav__img"></a></div>
                    <div class="image-nav__item"><a href="#photo-four1" class="image-nav__link"><img src="images/slider4-thumb.jpg" class="image-nav__img"></a></div>
                </div>
                <div class="steps__small-triggers"><img src="images/icons-steps.png" class="small-triggers__icons">
                    <div class="small-triggers__descr">
                        <div class="st-descr">Заполняете<br>форму</div>
                        <div class="st-descr">Дожидаетесь звонка менеджера</div>
                        <div class="st-descr">Оплачиваете товар на почте</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <section id="scroll-buy" class="buy">
        <div class="container">
            <div class="buy-container">
                <div class="buy-container__inner">
                    <div class="countdown">
                        <div class="countdown-descr">До конца акции осталось:</div>
                        <div class="cd">
                            <div id="js-cd-buy"></div>
                        </div>
                    </div>
                    <div class="buy__form">
                        <div class="form__price">
                            <div class="price--old">10680р.</div>
                            <div class="price--new">2990р.</div>
                        </div>
                        <form class="form__inputs" action="<?= MAIN_DOMAIN ?>order.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
                            <input class="form__input" type="text" name="name" placeholder="Введите Ф.И.О" required=""><br>
                            <input class="form__input" type="text" name="phone" placeholder="Введите телефон" required="">
                            <div class="form__submit-wrapper">
                                <input type="submit" value="Заказать со скидкой" class="button form__submit">
                            </div>
                            <input name="item_name" value="Amst" type="hidden"/>
                            <input name="item_price" value="2990" type="hidden"/>
                            <input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="buy-other">
                <div class="discount--buy">72</div>
                <div class="buy-product-photo"><img src="images/product2.png" alt="часы AMST"></div>
                <div class="buy-discount-title"><span>Осталось 5шт. со скидкой!</span></div>
            </div>
            <div class="footer">
<!--                <div class="footer__copy"><img src="images/cop2-w-800.png"></div>-->
                <div class="footer__copy"><?= REQUISITES ?></div>
                <div class="footer__privacy"><a href="politics.html" target="_blank">Политика конфиденциальности</a></div>
            </div>
        </div>
    </section>
    <script src="js/app.min.js"></script>

</body>

</html>