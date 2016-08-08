<?php include ("./../config.php"); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>AMST - Армейские наручные часы</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width">

    <link rel="icon" type="image/x-icon" href="files/amst_mobile/img/favicon.ico">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="files/amst_mobile/css/style.css?54321" />

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="files/_js/validation.js"></script>
    <script type="text/javascript" src="../infocdn-test.com/files/_js/ab.min.js"></script>
    <script type="text/javascript" src="files/_js/timer.js"></script>
    <script type="text/javascript" src="files/amst_mobile/js/script1679.js?6"></script>
    <script type="text/javascript">$jsonData = {"product":{"id":973,"name":"Армейские наручные часы AMST","title":"Армейские наручные часы AMST","short_description":"AMST - олицетворение статуса и успеха, чувства стиля и вкуса, оригинальности и самодостаточности.","full_description":"Часы Amst - новинка среди ударопрочных часов, которые выдержат самое агрессивное воздействие! Эти часы сделаны из современных сверхпрочных материалов по специальной технологии и готовы к любой нагрузке, а уникальный дизайн позволит носить их когда и где угодно, будь то офис или вечеринка, конференция или же нереальный экстрим!"},"prices":{"270":{"price":1190,"old_price":2380,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"UA","name":"Украина","currency":"грн.","rate":0.37,"phone_template":"+38 067 927 25 74","address_template":"01024, г. Киев, ул. Богомольца, д.5, кв.9","name_template":"Карпенко Ярослав Федорович","active":false},"271":{"price":2990,"old_price":5980,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"RU","name":"Россия","currency":"руб.","rate":1,"phone_template":"+7 928 827-22-53","address_template":"135999, Москва, ул. Ленина, д.10, кв.5","name_template":"Петров Петр Петрович","active":true},"357":{"price":80,"old_price":160,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"BY","name":"Беларусь","currency":"бел. руб.","rate":0.032,"phone_template":"+37 529 186 24 65","address_template":"220035, г. Минск, пр-т Машерова, д. 76, кв. 17","name_template":"Матвеев Евгений Алексеевич","active":false}},"lowPrice":{"year":"2016","month":"08","day":"10"}};</script>
    <script>
        $( document ).ready(function() {
            currentClientDate = new Date();
            currentTimeZoneOffsetInHours = -currentClientDate.getTimezoneOffset()/60;
            $.each( $('.client_time_zone'), function() {
                $(this).val(currentTimeZoneOffsetInHours);
            });
        });
    </script>
</head>
<body>
<script type="text/javascript">
    var ad1_notify = new Object(),
        price;

    for (key in $jsonData.prices) {

        if ($jsonData.prices[key].active) {
            price = $jsonData.prices[key].price;
            currency = $jsonData.prices[key].currency;
        }
    }

    ad1_notify.params = {
        city		: "Новосибирск",
        landDir		: "amst_mobile_3",
        sex			: "",
        multiply	: "" || 0,
        price		: price || 0,
        currency	: currency || "руб.",
        geoKey		: "RU" || "RU",
        zdorov		: "" || false
    };
</script>

<script type="text/javascript" src="files/_blocks/notificators/funcc4ca.js?1"></script>

<div class="main-wrap">
    <div class="section block-1">
        <span class="sale">-72%</span>
        <div class="cost">
            <div class="old-cost col-2">10679 руб.</div>
            <div class="new-cost col-1">2990 руб.</div>
        </div>
        <div class="timer">
            <p class="center">До конца акции осталось:</p>
            <div class="countbox  clearfix"></div>
        </div>
        <div class="center"><a href="#order" class="button">Заказать со скидкой</a></div>
    </div>
    <div class="section block-2">
        <h2>Военные часы <span class="col-1">AMST</span><br/><small>это прежде всего:</small></h2>
        <ul>
            <li>
                <h3 class="col-1">Часы Спецназа</h3>
                <p>Только сейчас эти часы стали доступны нам с Вами, ранее их носили лишь спецслужбы страны!</p>
            </li>
            <li>
                <h3 class="col-1">Совершенный дизайн</h3>
                <p>Создание циферблата - целое искусство, в котором не обойтись без векового мастерства в переплетении с самыми новыми технологиями. Дизайн этих часов - подобие совершенства, на которое уже многие годы равняются другие именитые бренды.</p>
            </li>
            <li>
                <h3 class="col-1">Высокое качество</h3>
                <p>Корпус военных часов обладает повышенной устойчивостью к коррозии и сохраняет стойкость цвета в течение многих десятков лет, как и ремешок, который с годами не будет перетираться и деформироваться.</p>
            </li>
            <li>
                <h3 class="col-1">Мировая популярность</h3>
                <p>Достаточно быстро модель часов, разработанная специально для спецслужб, обрела статус “успеха современного мужчины”. Их выбирают звёзды голливуда, шоу-бизнеса, спортсмены и политики.</p>
            </li>
        </ul>
    </div>
    <div class="line"></div>
    <div class="section block-3">
        <h2>Часы <span class="col-1">AMST</span></h2>
        <img src="files/amst_mobile/img/tov-1.jpg" alt="Военные пуленепробиваемые Часы AMST" title="Военные пуленепробиваемые Часы AMST" >
        <center><img src="files/amst_mobile/img/tov-test1.jpg" alt="Военные пуленепробиваемые Часы AMST" title="Военные пуленепробиваемые Часы AMST" ></center>
        <div class="tov-spec">
            <dl>
                <dt>Сборка:</dt>
                <dd>Бельгия</dd>
            </dl>
            <dl>
                <dt>Диаметр:</dt>
                <dd>46 мм</dd>
            </dl>
            <dl>
                <dt>Толщина:</dt>
                <dd>12 мм</dd>
            </dl>
            <dl>
                <dt>Стекло:</dt>
                <dd>закаленное HARDLEX c антибликовым покрытием (устойчиво к царапинам)</dd>
            </dl>
            <dl>
                <dt>Механизм:</dt>
                <dd>Японский кварцевый механизм Miyota</dd>
            </dl>
            <dl>
                <dt>Материал корпуса:</dt>
                <dd>Часовая сталь</dd>
            </dl>
            <dl>
                <dt>Водозащита:</dt>
                <dd>50 атм</dd>
            </dl>
            <dl>
                <dt>LED дисплей:</dt>
                <dd>Время, дата, день недели</dd>
            </dl>
        </div>
        <br>
        <div class="cost clearfix">
            <div class="old-cost">10679 руб.</div>
            <div class="new-cost col-1">2990 руб.</div>
        </div>
        <div class="center"><a href="#order" class="button">Заказать со скидкой</a></div>
    </div>
    <div class="section block-4">
        <h2>Доставка и <span class="col-1">оплата</span></h2>
        <ul>
            <li>
                <h3 class="col-1">Доставка</h3>
                <p>Доставка почтой от 1 до 10 рабочих дней. </p>
            </li>
            <li>
                <h3 class="col-1">Оплата</h3>
                <p>Никаких предоплат! Оплата заказов осуществляется непосредственно по факту получения заказа.</p>
            </li>
            <li>
                <h3 class="col-1">Гарантии</h3>
                <p>Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа, независимо от причины возврата.</p>
            </li>
        </ul>
    </div>
    <div class="section block-5">
        <h2><span class="col-1">Отзывы</span> покупателей</h2>
        <div class="rew-cont">
            <div class="rew-item">
                <img src="files/amst_mobile/img/rew-1.jpg" alt="Военные пуленепробиваемые Часы AMST отзывы" title="Военные пуленепробиваемые Часы AMST отзывы" >
                <span class="col-1">Оксана Климова</span>
                <p>Хотелось бы оставить свой отзыв о замечательных часах, которые я подарила своему мужу на день рождения! Он был очень доволен! Таких оригинальных часов у него еще не было. Когда твой подарок приносит радость это всегда круто!!!</p>
            </div>
            <div class="rew-item">
                <img src="files/amst_mobile/img/rew-2.jpg" alt="Военные пуленепробиваемые Часы AMST отзывы" title="Военные пуленепробиваемые Часы AMST отзывы" >
                <span class="col-1">Вячеслав Егоров</span>
                <p>Пришли целые, без единой царапины. Часы смотрятся КРУТО, по весу достаточно тяжелые, ремешок хороший и качественный. Выглядят стильно и однозначно дороже своей цены. Дошли до меня за 2 дня.</p>
            </div>
            <div class="rew-item">
                <img src="files/amst_mobile/img/rew-3.jpg" alt="Военные пуленепробиваемые Часы AMST отзывы" title="Военные пуленепробиваемые Часы AMST отзывы" >
                <span class="col-1">Игорь Кузьмин</span>
                <p>Дизайн – это самая главная фишка. Выглядят очень по-мужски и очень дорого, лучше, чем на картинке. Я просто в восторге, думаю прикупить еще одни по акции.</p>
            </div>
        </div>
    </div>
    <div class="order" id="order">ОСТАВЬТЕ ЗАЯВКУ &nbsp; &#9200;<br/><small>и наши менеджеры свяжутся с вами в ближайшее время</small></div>
    <div class="section block-1 end">
        <span class="sale">-72%</span>
        <div class="cost">
            <div class="old-cost col-2">10679 руб.</div>
            <div class="new-cost col-1">2990 руб.</div>
        </div>
        <form action="<?= MAIN_DOMAIN ?>order.php" method="post" class="orderformcdn">
            <div><input type="text" name="name" placeholder="Введите Ф.И.О" required=""></div>
            <div><input type="text" name="phone" placeholder="Введите телефон" required=""></div>
            <div><button class="button">Заказать со скидкой</button></div>
            <input name="item_name" value="Amst mobile" type="hidden"/>
            <input name="item_price" value="2990" type="hidden"/>
            <input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
        </form>
    </div>
</div>
<div class="center" style="padding-bottom: 20px;">
    <div class="copyright">
        <?= REQUISITES ?>
        <a href="privacypolicy.html" class="policy" target="_blank">Политика конфиденциальности</a></div>
</div>

</body>

</html>



































<!-- 1 -->
