<?php include ("./../config.php"); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Портмоне Wild Alligator</title>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width">

   <link rel="SHORTCUT ICON" type="image/x-icon" href="files/wild_alligator_1/img/favicon.ico">
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="files/wild_alligator_1/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="files/wild_alligator_1/css/swipebox.min.css" />
	<link type="text/css" rel="stylesheet" href="files/wild_alligator_1/css/style.css?3" />

	<!-- JS -->
	<script src="files/_js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$jsonData = {"product":{"id":1016,"name":"Портмоне Wild Alligator","title":"Портмоне Wild Alligator","short_description":"Портмоне «Wild Alligator» - это безупречное качество, дорогой внешний вид и практичность.","full_description":"Портмоне «Wild Alligator» - это безупречное качество, дорогой внешний вид и практичность."},"prices":{"271":{"price":2490,"old_price":4980,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"RU","name":"Россия","currency":"руб.","rate":1,"phone_template":"+7 928 827-22-53","address_template":"135999, Москва, ул. Ленина, д.10, кв.5","name_template":"Петров Петр Петрович","active":true}},"lowPrice":{"year":"2016","month":"07","day":"20"}};
		var imgUrl = "files/wild_alligator_1/img/index.html";
	</script>
	
	<script type="text/javascript" src="files/_js/validation.js"></script>
	<script type="text/javascript" src="files/_js/ab.min.js"></script>
	<script type="text/javascript" src="files/_js/timer.js"></script>
  	<script type="text/javascript" src="files/wild_alligator_1/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="files/wild_alligator_1/js/jquery.swipebox.min.js"></script>
  	<script type="text/javascript" src="files/wild_alligator_1/js/main.js"></script>

</head>
<body>

   <div class="modal_block_1">
   <div class="form_order">
      <h2>Успей заказать </br><span>по отличной цене</span></h2>
      <div class="order_price top_price"><small><span class="price_land_s1">2490</span> <span class="price_land_curr">руб.</span></small></div>
      <form action="<?= MAIN_DOMAIN ?>order.php" method="post" class="orderformcdn">
         <div>
                           <input type="hidden" name="country" value="0">
                        <input class="name" type="text" name="name" placeholder="Введите Ваше имя" required="">
            <input class="phone" type="text" name="phone" placeholder="Введите Ваш телефон" required="">
            <div class="errField"></div>
            <button >Заказать</button>
         </div>
      </form>
   </div>
</div>
<div class="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
   </div>
   <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
         <li class="active"><a href="#">Начало</a></li>
         <li><a href="#ancor01">Описание</a></li>
         <li><a href="#ancor04">Галерея</a></li>
         <li><a href="#ancor05">Гарантии</a></li>
         <li><a href="#ancor06">Отзывы</a></li>
         <li><a href="#action_2">Купить</a></li>
      </ul>
   </div>
</nav>
</div>
<header>

   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-12">
         </div>
         <div class="col-md-4 col-sm-12">
            <div class="form_order">
               <hgroup>
                  <div><img src="files/wild_alligator_1/img/logo_.png" alt=""></div>
                  <p class="site_desc">ОГРАНИЧЕННАЯ ВЕРСИЯ</p>
                  <div class="top_price">
                     <small><span class="price_land_s1">2490</span></small><span class="price_land_curr">руб.</span>
                  </div>
               </hgroup>
               <h2>ЭКСКЛЮЗИВНОЕ ПОРТМОНЕ ИЗ НАТУРАЛЬНОЙ КОЖИ</h2>
               <form action="<?= MAIN_DOMAIN ?>order.php" method="post" class="orderformcdn">
                  <div class="form_top">
                                             <input type="hidden" name="country" value="0">
                                          <input class="name" type="text" name="name" placeholder="Введите Ваше имя" required="">
                     <input class="phone" type="text" name="phone" placeholder="Введите Ваш телефон" required="">
                     <div class="errField"></div>
                     <button>Заказать</button>
                  </div>
               </form>
               <div class="best">
                  <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6">1 год расширенная гарантия</div>
                     <div class="col-md-6 col-sm-6 col-xs-6">100% возврат денег в течение 14 дней</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

<main>

   <section class="top_new" id="top_new">
      <div id="ancor01"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-sm-8">
               <hgroup>
                  <h2>Безупречное качество <span>в Ваших руках</span></h2>
               </hgroup>
               <div class="top_new_scheme">
                  <div class="braslet"><img src="files/wild_alligator_1/img/main_.jpg" alt=""></div>
                  <div class="characteristics">
                     <ul>
                        <li>11 отсеков<br>для карт</li>
                        <li>19*10*1,5<br>габариты</li>
                        <li>2 отсека<br>SIM карт</li>
                        <li>Смартфон<br>отдел</li>
                        <li>105 гр<br>вес</li>
                        <li>3 отсека<br>для купюр</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <img src="files/wild_alligator_1/img/img_3.jpg" alt="">
               <img src="files/wild_alligator_1/img/img_1.gif" alt="">
            </div>
         </div>
      </div>
   </section>

   <section class="benefits" id="benefits">
      <div id="ancor02"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="b_arrow"></div>
               <ul class="benefits_1">
                  <li>
                     <hgroup>
                        <h3>Современный дизайн</h3>
                     </hgroup>
                     <p>В век смарт-изобретений  «умной» должна быть не только техника, но и повседневные вещи. Тонкое, но многофункциональное кожаное портмоне Wild Alligator с рельефным декором и благородным  тиснением полностью соответствует требованиям времени.</p>
                  </li>
                  <li>
                     <hgroup>
                        <h3>Компактное, но вместительное</h3>
                     </hgroup>
                     <p>- 11 отсеков для пластиковых карт, визиток и документов </br>
                        - 1 прозрачное «окошко»</br>
                        - 2 отсека для хранения сим-карт</br>
                        - 3 отделения для купюр</br>
                        - специальный отсек для смартфона
                     </p>
                  </li>
               </ul>
            </div>
            <div class="col-md-6">
               <ul class="benefits_2">
                  <li>
                     <hgroup>
                        <h3>Практичность</h3>
                     </hgroup>
                     <p>Больше нет необходимости носить кошелек и телефон по отдельности! Удобный внешний отсек для хранения смартфона способен заменить даже специальные чехлы. Прошитый изнутри микрофиброй, карман не только защитит Ваш гаджет от внешних воздействий, но и будет очищать экран при каждом извлечении.</p>
                  </li>
                  <li>
                     <hgroup>
                        <h3>Защита данных</h3>
                     </hgroup>
                     <p>Как известно, хранение смартфона в непосредственной близости от банковских карт может привести к их размагничиванию и как следствие – потере данных. Портмоне Wild Alligator прошит внутри экраном из фольги, который защитит Ваши карты от размагничивания.</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <section class="order" id="order">
      <div id="ancor03"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <img src="files/wild_alligator_1/img/img_2.jpg" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
               <hgroup>
                  <h2>Отличная идея <span>для подарка</span><img class="order_img" src="files/wild_alligator_1/img/h2_img.png" alt=""></h2>
               </hgroup>
               <div>
                  <ul class="nav nav-tabs">
                     <li class="active" class=""><a class="myself" href="#myself" data-toggle="tab">Себе</a></li>
                     <li><a class="gift" href="#gift" data-toggle="tab">Близкому</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane fade active in" id="myself">
                        <p>Это не просто дорогой аксессуар, но и удобный органайзер. Выполненное из мягкой кожи с выделкой под аллигатора, портмоне не только выгодно выделит Вас из толпы, но и станет приятным и удобным в использовании.</p>
                        <a href="#action_2" id="btn_1">Заказать</a>
                     </div>
                     <div class="tab-pane fade" id="gift">
                        <p>Важным и близким людям всегда хочется подарить что-то особенное и в то же время практичное. Портмоне Wild Alligator – лучший подарок для мужа, молодого человека или сына. Его многофункциональность и уникальный яркий дизайн оценят  мужчины любого возраста! </p>
                        <a href="#action_2" id="btn_2">Заказать</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="photo" id="photo">
      <div id="ancor04"></div>
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0510.jpg"><img src="files/wild_alligator_1/img/0510.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0508.jpg"><img src="files/wild_alligator_1/img/0508.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0509.jpg"><img src="files/wild_alligator_1/img/0509.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0501.jpg"><img src="files/wild_alligator_1/img/0501.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0502.jpg"><img src="files/wild_alligator_1/img/0502.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0503.jpg"><img src="files/wild_alligator_1/img/0503.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0504.jpg"><img src="files/wild_alligator_1/img/0504.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0505.jpg"><img src="files/wild_alligator_1/img/0505.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0506.jpg"><img src="files/wild_alligator_1/img/0506.jpg" alt=""></a></div>
               <div class="col-md-2 col-xs-6 col-sm-4"><a class="swipebox" rel="group" href="files/wild_alligator_1/img/0507.jpg"><img src="files/wild_alligator_1/img/0507.jpg" alt=""></a></div>
            </div>
         </div>
      </div>
   </section>

   <section class="wath" id="wath">
      <div id="ancor05"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <hgroup>
                  <h2>Почему стоит купить у нас?</h2>
               </hgroup>
               <div class="row">
                  <ul class="col-md-6 col-sm-6">
                     <li>Оплата наличными </br>при получении или онлайн</li>
                     <li>1 год расширенная гарантия</li>
                     <li>Только подлинная продукция</li>
                     <li>Бесплатная доставка по России</br>и странам СНГ</li>
                  </ul>
                  <ul class="col-md-6 col-sm-6">
                     <li>Примерка перед покупкой</li>
                     <li>Безупречный сервис</li>
                     <li>Более 10 000 довольных клиентов</li>
                     <li>Подарок - нож кредитка</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="rew" id="rew">
      <div id="ancor06"></div>
      <div class="container">
         <hgroup>
            <h2>Отзывы</h2>
         </hgroup>
         <div data-ride="carousel" class="carousel slide col-md-12" id="carousel"  data-interval="false">
            <div class="carousel-inner">
               <div class="item active">
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0702.png">
                              <div class="name"><strong>Вячеслав,</strong><br>Спб</div>
                              <span class="link_vk">vk.com/chernyshev</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Жаль, что девушки-менеджеры номер не оставляют! :)</p>
                              <p>Спасибо за классное портмоне! Очень удобная и практичная вещь. Вмещается все, что нужно и не занимает много места. Друзья тоже оценили! Боялся, что iPhone 6 не влезет в специальный отсек. Но поместился как влитой, круто! Буду советовать заказывать на вашем сайте.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0703.png">
                              <div class="name"><strong>Вячеслав,</strong><br>Краснодар </div>
                              <span class="link_vk">vk.com/a007ck23rus</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Посылка пришла вовремя, портмоне очень понравилось</p>
                              <p>Получил портмоне, очень доволен! Доставили быстро, сам кошелек точно такой же, как на фотографиях. Вместе с портмоне заказал ремень с таким же дизайном и со скидкой! Вместе смотрится очень эффектно :) </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0706.png">
                              <div class="name"><strong>Макс</strong><br>Краснодар  </div>
                              <span class="link_vk">vk.com/poltavskiymaks</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Мне всё понравилось, точно такое же, как на фотографиях</p>
                              <p>Заказывал портмоне Wild Alligator в Москву, курьер принес на следующий день! Сервис на высоте, за него отдельное спасибо! Особенно порадовал отсек для смартфона, теперь даже салфетку для оптики носить с собой не нужно, все «встроено» :)  Это гениально!</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0701.png">
                              <div class="name"><strong>Павел</strong><br>Новороссийск </div>
                              <span class="link_vk">vk.com/id6845562</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Классно смотрится</p>
                              <p>Ребята, спасибо за классный кошелек! Теперь все нужное под рукой, даже для сим-карт кармашки есть, очень удобно! Качество кожи очень хорошее, приятно держать в руках и смотрится дорого. Мне нравится! Сейчас объявлений с такими портмоне полно в интернете, очень рад, что не попал на мошенников и заказал у вас!)</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0704.png">
                              <div class="name"><strong>Константин</strong><br>Краснодар  </div>
                              <span class="link_vk">vk.com/i_am_kostya</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Купил портмоне своему боссу. Доволен</p>
                              <p>Покупал портмоне боссу в подарок. Он оценил. Очень солидно и круто смотрится, на подарок самое то! И по качеству не разочарует. Понравилось, что есть защита от размагничивания карт. Думаю, для делового человека это важно. В общем, такие подарки дарить приятно. Теперь себе тоже такой хочу.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 col-xs-12">
                              <img src="files/wild_alligator_1/img/0705.png">
                              <div class="name"><strong>Никита,</strong><br>Москва </div>
                              <span class="link_vk">vk.com/id72367548</span>
                           </div>
                           <div class="col-md-8 col-sm-8 col-xs-12">
                              <p class="anons">Товар такой, какой выбирал. Доставили на второй день после заказа</p>
                              <p>Не часто заказываю что-то в интернете, боюсь, что в итоге товар окажется не таким, как его показали. Но тут не разочаровался. Менеджеры держат в курсе от начала покупки и до момента ее получения, доставляют в срок, в коробочке то же, что и на фотографиях. И само портмоне очень удобное. Думаю, буду заказывать на Топзаказе еще, вам можно доверять))</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a data-slide="prev" href="#carousel" class="left carousel-control"></a>
            <a data-slide="next" href="#carousel" class="right carousel-control"></a>
         </div>
      </div>
   </section>

   <section class="action action_" id="action">
      <div id="ancor06"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
               <div class="form_order">
                  <div class="_form_header_left">
                     <div class="form_new_price"><span class="price_land_s1">2490</span> <span class="price_land_curr">руб.</span></div>
                  </div>
                  <div class="_form_header_right">
                     <div class="balance">17</div>
                     портмоне </br>осталось</br> на складе
                  </div>
                  <div class="clr"></div>
                  <form action="<?= MAIN_DOMAIN ?>order.php" method="post" class="orderformcdn">
                                             <input type="hidden" name="country" value="0">
                                          <input class="name" type="text" name="name" placeholder="Введите Ваше имя" required="">
                     <input class="phone" type="text" name="phone" placeholder="Введите Ваш телефон" required="">
                     <div class="errField"></div>
                     <button>Заказать</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   
   <section class="faq" id="faq">
      <div id="ancor08"></div>
      <div class="container">
         <hgroup>
            <h2>Вопросы и ответы</h2>
         </hgroup>
         <div class="row">
            <ul class="col-md-12 row">
               <li class="col-md-6">
                  <hgroup>
                     <h3>Это натуральная кожа?</h3>
                  </hgroup>
                  <p>Портмоне Wild Alligator выполнено из ЭКОкожи высокого качества. После продолжительного использования не потеряет свой прежний вид. экокожа в процессе пользования становится еще мягче, поэтому портмоне со временем лишь станет еще приятнее и комфортнее в использовании. К тому же, мы предоставляем расширенную гарантию на наш товар сроком на 1 год.</p>
               </li>
               <li class="col-md-6">
                  <hgroup>
                     <h3>Почему Wild Alligator называется «смарт-портмоне»?</h3>
                  </hgroup>
                  <p>Кроме того, что портмоне выполняет функции компактного органайзера, оно оснащено несколькими дополнительными функциями, очень необходимыми современному мужчине. Это первое портмоне с защитой от размагничивания кредитных карт. Портмоне Wild Alligator так же учитывает все тонкости использования смартфонов в повседневной жизни. Именно поэтому отсек для девайса прошит микрофиброй. Портмоне позаботится о чистоте ваших гаджетов  вместо Вас :)</p>
               </li>
            </ul>
            <ul class="col-md-12 row">
               <li class="col-md-6">
                  <hgroup>
                     <h3>Есть ли у Вас склад в Москве или других городах?</h3>
                  </hgroup>
                  <p>Есть! Наличие собственных складов в Москве, Санкт-Петербурге, Краснодаре, Одессе и Алматы гарантирует Вам доставку Вашего заказа в этих городах на следующий день.  Вы также можете самостоятельно забрать Вашу покупку сразу в день заказа в пункте выдачи.</p>
               </li>
               <li class="col-md-6">
                  <hgroup>
                     <h3>Могу ли я вернуть товар, если </br>мне не понравилось?</h3>
                  </hgroup>
                  <p>
                     Да, Вы можете вернуть изделие в течение 14 дней без объяснения причин. Наша компания компенсирует Вам полную стоимость товара. 
                  </p>
               </li>
            </ul>
            <ul class="col-md-12 row">
               <li class="col-md-6">
                  <hgroup>
                     <h3>Получу ли я то, что заказываю?</h3>
                  </hgroup>
                  <p>
                     Оформляя заказ на нашем сайте, Вы можете быть всегда уверены в качестве нашей продукции и гарантировано получить именно тот товар, который заказываете. Мы заботимся о своей репутации и довольные клиенты для нас на первом месте!
                  </p>
               </li>
               <li class="col-md-6">
                  <hgroup>
                     <h3>В какой упаковке приходит товар?</h3>
                  </hgroup>
                  <p>Ваш заказ приходит в фирменной коробке с логотипами. Весь товар качественно упакован, поэтому Вы можете быть уверены не только в том, что получаете оригинальный продукт, но и в том, что заказ доставят не поврежденным. К тому же, качественная и яркая коробка позволит Вам приобрести портмоне в подарок близким и не беспокоится об упаковке! </p>
               </li>
            </ul>
         </div>
      </div>
   </section>

   <section class="work_scheme" id="work_scheme">
      <div id="ancor09"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-sm-8">
               <hgroup>
                  <h2>Схема работы</h2>
               </hgroup>
               <div class="row">
                  <div class="work_items">
                     <ul>
                        <li class="col-md-6 col-sm-6 col-xs-6"><span></span>Заполните заявку </br>на сайте </li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><span></span>Ответьте на звонок </br>менеджера</li>
                     </ul>
                  </div>
                  <div class="work_items">
                     <ul>
                        <li class="col-md-6 col-sm-6 col-xs-6"><span></span>Дождитесь смс </br>с кодом отслеживания </li>
                        <li class="col-md-6 col-sm-6 col-xs-6"><span></span>Получите Ваш заказ в почтовом </br>отделении или курьером</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <img src="files/wild_alligator_1/img/bl11_.jpg" alt="">
            </div>
         </div>
      </div>
   </section>

   <section class="action action_2" id="action_2">
      <div id="ancor10"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <img src="files/wild_alligator_1/img/img_6.jpg" alt="">
            </div>
            <div class="col-md-4">
               <div class="form_order">
                  <h2>Успей заказать <span>по отличной цене</span></h2>
                  <div class="order_price top_price"><small><span class="price_land_s1">2490</span></small><span class="price_land_curr">руб.</span></div>
                  <form action="<?= MAIN_DOMAIN ?>order.php" method="post" class="orderformcdn">
                                             <input type="hidden" name="country" value="0">
                                          <input class="name name1" type="text" name="name" placeholder="Введите Ваше имя" required="">
                     <input class="phone phone1" type="text" name="phone" placeholder="Введите Ваш телефон" required="">
                     <div class="errField"></div>
                     <button class="minwid_small">Заказать</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

</main>

<footer>
   <?= REQUISITES ?>
   <p><a href="privacypolicy.html" target="_blank">Политика конфиденциальности</a></p>
</footer>

</body>

</html>




	
	

	
		
			
				
					
				
			

			

			
				
			
		
	
	
		
	    
	    
	    
			
				
			
		
	



<!-- 1 -->
