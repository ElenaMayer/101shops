<?php include ("./../config.php"); ?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/scroll.js"></script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/plugins.js" type="text/javascript"></script>
    <script src="js/detect.js" type="text/javascript"></script>
    <script src="js/ComebackerAlert.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    <link rel="stylesheet" type="text/css" href="fonts/roboto.css">
    <link href="css/ComebackerAlert.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div id="openModal" class="modalDialog">
	<div style="width:600px;">
		<a href="#close" title="Закрыть" class="close">X</a>
		<h2 style="text-align:center; margin-top:15px; font-size:24px;">Заполните форму и мы Вам перезвоним</h2>
		
		<form action="<?= MAIN_DOMAIN ?>order.php" method="POST" onsubmit="if(this.name.value==''){
                alert('Введите Ваше имя!');return false
            }
            if(this.phone.value==''){
                alert('Введите Ваш номер телефона!');return false
            }
            return true;">
            <input style="width:70%; padding:10px;margin-bottom: 20px;" name="name" value="" type="text" placeholder="Введите Ваше Имя" />
            <input style="width:70%; padding:10px;" name="phone" value="" type="text" placeholder="Введите Ваш Телефон" />

            <input style="width:50%; padding:10px; margin-top:20px; margin-bottom:20px; cursor:pointer; background:#f1aa24;" name=" " value="ЗАКАЗАТЬ ПО СКИДКЕ" type="submit"  />
		
		</form>
		
		
		<p>ВНИМАНИЕ: количество акционного товара ограничено!</p>
	</div>
</div>

   
    <div> </div>
    <div id="menu"><z>
        <div><img src="img/4455.png" border="0"></div>
        <a href="#" id="mm">МЕНЮ</a>
        <ul>
            <li><a href="#l1" id="l1">ВОПРОСЫ И ОТВЕТЫ</a></li>
            <li><a href="#l3">ОТЗЫВЫ КЛИЕНТОВ</a></li>
            <li><a href="#l2">ДОСТАВКА И ОПЛАТА</a></li>
            <li><a href="#openModal">ОФОРМИТЬ ЗАКАЗ</a></li>
        </ul>
      </z> </div>
	  
    <div id="block_1">
      <div class="main">
        <div id="title0">  <br>
            </div>
        <div id="title1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ЭЛИТНЫЕ ЧАСЫ</div>
        <div id="title2">&nbsp;&nbsp;&nbsp;"Skeleton Winner"</div>
        <div id="title3"><b>ОЛИЦЕТВОРЕНИЕ СТАТУСА И УСПЕХА</b></div>
        <div id="title4"> &gt; Стильный дизайн<br>
          &gt; Механика с автоподзаводом<br>
          &gt; Гарантия 12 месяцев<br>
          &gt; Работаем по всей стране!<br>
          &gt; Сезонная Акция! Скидка 70%</div>
      </div>
    </div>

    <div name="l1" class="anchor_l1"></div>
    <img src="fonts/1c5vix3owt" width="1" height="1">
    <div id="line1"></div>
    <h1>ПОЧУВСТВУЙ ПРИКОСНОВЕНИЕ РОСКОШИ</h1>
    <div id="block_2">
      <div class="main"> <img src="img/depositphotos_11962165_original.jpg" style="width: 40%; height: auto;" border="0" align="left">
        <h3>ПОЧЕМУ МУЖЧИНЫ ВЫБИРАЮТ ЭТИ ЧАСЫ?</h3>
        <h4>СТИЛЬНАЯ КОНЦЕПЦИЯ</h4>
        Skeleton Winner - это шикарные часы, которые мы называем поистине
        "Королевскими". Часы с удивительной красоты скелетонизированным
        циферблатом и корпусов ввиде шестеренки с золотистыми римскими метками.&nbsp;
        <h4>ФУНКЦИЯ АВТОПОДЗАВОДА</h4>
        Сегодня все большую популярность завоевывают часы с автоматическим
        подзаводом, работающие за счет кинетической энергии, возникающей при
        движении руки. Приобрести такие часы - значит навсегда забыть о смене
        батареек!<br>
        "Каждый уважающий себя мужчина должен носить эти Часы !"
        <h4>ВЫСОЧАЙШЕЕ КАЧЕСТВО</h4>
        Корпус часов выполнен из очень качественных материалов, что значительно
        увеличит срок службы! Кожанный ремешок приятно облегает запястье руки и
        дает ощущение комфорта. <br>
      </div>
    </div>
	 <br>
    <h2 class="video">ПОСМОТРИТЕ ВИДЕООБЗОР НА ЧАСЫ SKELETON WINNER!</h2>
    <center>
      <div class="main">
        <div><iframe width="518" height="324" src="https://www.youtube.com/embed/eMe0g1YPQgU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
    </center>
    <h1>НЕВЕРОЯТНАЯ АКЦИОННАЯ СКИДКА - 70%</h1>
    <div id="block_2">
      <div class="main">
        <div name="gh"></div>
        <div id="q3"><br>

      </div>
    </div>
    <h2>ЗАКАЖИТЕ ЧАСЫ ВАШЕЙ МЕЧТЫ СО СКИДКОЙ 70%</h2>
    <div id="block_2">
      <div name="zakaz"></div>
      <div class="main"> <img src="img/ulysse-nardin.png" style="width: 35%; height: auto; margin-bottom: 25%;" border="0" align="left">
        <div id="text1">СПЕШИТЕ! ИЗ 200 <x1>КОМПЛЕКТОВ ОСТАЛОСЬ</x1> ВСЕГО <x2>11</x2></div>
        <div id="text2">СТАРАЯ ЦЕНА: <b><strike>9650</strike>р.</b></div>
        <div id="text3">НОВАЯ ЦЕНА: <b>2890 р.</b></div>
        <br>
        <br>
        <a href="#openModal" class="button"></a>
        <div id="text4">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div>

        <iframe scrolling="no" src="watch.html" frameborder="0"></iframe>
      </div>
    </div>
    <div id="line2"></div>
    <h1>О ТАКОМ ПОДАРКЕ МЕЧТАЕТ КАЖДЫЙ МУЖЧИНА</h1>
    <div id="line3"></div>
    <div id="block_2">
      <div class="main"> <img src="img/maximarine43_2.jpg" style="width: 40%; height: auto; border-radius: 10%; margin-right: 3%;" border="0" align="left">
        <h4>ДУМАЕТЕ, ЧТО ПОДАРИТЬ?</h4>
        &nbsp;&nbsp;&nbsp;&nbsp; Другу, брату, дяде, отцу, коллеге по работе? Какой оригинальный
        подарок сделать чтобы он выделился среди остальных и запомнился надолго?
        А еще лучше - чтобы подарок регулярно приносил приятные воспоминания о
        Вас? <br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp; Подарите своим близким Элитные часы Skeleton Winner, которые
        поразят всех своим уникальным и неповторимым дизайном! Увидев их,
        "виновник торжества" будет просто ошеломлен! Эти часы являются хорошим и
        стильным аксессуаром, они поражают оригинальностью, приковывают взгляды
        окружающих и отлично показывают время!</div>
    </div>
    <h1 style="margin-top: 10%;">ХАРАКТЕРИСТИКИ</h1>
    <div id="block_4">
      <div class="main"> <img src="img/ulysse-nardin-super-yacht-cup.jpg" style="width: 45%; height: auto; border-radius: 20px;" border="0" align="right"> <br>
        <p><span><br>
            Название:</span> "Skeleton Winner";<br>
          Вид: Наручные Часы;<br>
          Тип: Мужские;<br>
          Механизм: Механические с автоподзаводом;<br>
          Цвет корпуса: Золотой с серебристыми вставками;<br>
          Материал ремешка: Высококачественная Кожа PU;<br>
          Цвет ремешка: Черный;<br>
          Задняя крышка: Прозрачная;<br>
          Застежка: Классическая;<br>
          Циферблат: Римские Цифры;<br>
          Длина Ремешка: 245 мм;<br>
          Диаметр Циферблата: 40 мм;<br>
          Толщина Циферблата: 12 мм;<br>
          Вес: 59 г.<br>
          <br>
        </p>
      </div>
    </div>
	 <br>
    <h2 class="photo">СТИЛЬ И КАЧЕСТВО ПОРАЖАЮТ ВООБРАЖЕНИЕ!</h2>
    <div id="block_2">
      <div class="main">
        <div align="center"><img src="img/6878687.jpg" style="width: auto; height: auto;" border="0"></div>
      </div>
    </div>
    <h2>ЗАКАЖИТЕ ЧАСЫ ВАШЕЙ МЕЧТЫ СО СКИДКОЙ 70%</h2>
    <div id="block_2">
      <div class="main"> <img src="img/ulysse-nardin.png" style="width: 35%; height: auto; margin-bottom: 25%;" border="0" align="left">
        <div id="text1">СПЕШИТЕ! ИЗ 200 <x1>КОМПЛЕКТОВ ОСТАЛОСЬ</x1> ВСЕГО <x2>11</x2></div>
        <div id="text2">СТАРАЯ ЦЕНА: <b><strike>9650</strike>р.</b></div>
        <div id="text3">НОВАЯ ЦЕНА: <b>2890 р.</b></div>
        <br>
        <br>
        <a href="#openModal" class="button"></a>
        <div id="text4">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div>
        
        <iframe scrolling="no" src="watch.html" frameborder="0"></iframe>

      </div>
    </div>
        <div name="l3" class="anchor_l3"></div>
    <h1>ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h1>
    <div id="block_2">
      <div class="main">
        <div id="text10"><img src="img/2.png" border="0">
          <span style="color:#FFA500; font-size:28px; text-align:center;">Евгений, г.Ижевск</span><br><p>Получил часы. Спасибо за быструю
                доставку (всего 7 дней, думал дольше будут идти). <br>
                Часы супер, очень понравились! Теперь я ещё больше в них
                влюбился, когда надел их на свою руку. Еще раз спасибо!</p>
        </div>
        <div id="text10"><img src="img/3.png" border="0"><span style="color:#FFA500; font-size:28px; text-align:center;">Анатолий, г.Ростов-Великий</span><br>
          <p>Получил посылку! Супер!!! Стильные, брутальные, как я и хотел. Девушки
              все обращают внимание на эти суперские часы, заодно и повод
              пообщаться появляется. Круто! Спасибо, с нетерпением жду новых
              товаров в вашем интернет магазине.</p>
        </div>
        <div id="text10"><img src="img/4.png" border="0"><span style="color:#FFA500; font-size:28px; text-align:center;">Максут, г.Астана</span><br>
          <p>Пару слов о часах. Часы просто сказка!!! очень нравится, как
            сочетаются с классическим стилем: пиджак + рубашка, для деловых
            встреч самое оно! Но, и с повседневной одеждой, такой как джинсы
            часы смотрятся супер! это также говорит о многом. Приятно
            чувствовать возрастающую самооценку, одевая эти часы!</p>
        </div>
        <div id="text10"><img src="img/7.png" border="0"><span style="color:#FFA500; font-size:28px; text-align:center;">Оксана Лебедева, Самара</span><br>
          <p>Купила мужу на день рождения. Он у меня любит разные часы. Но в форме скелетонов у него еще не было никогда. 
		     Я сразу же представила: как они классно бы смотрелись на его руке и
              заказала. Муж очень доволен. Я у вас уже брала себе Умные часы для своего смартфона, 
			  мне очень понравилось ваше обслуживание, молодцы! Будут новые товары - пишите!
			  Можете разместить мой отзыв на своем сайте))</p>
        </div>
        <div id="text10"><img src="img/5.png" border="0"><span style="color:#FFA500; font-size:28px; text-align:center;">Есет, г.Алматы</span><br>
          <p>У меня много часов, но таких ещё не было. Посылку
              получил, все в отлично. Спасибо. Часы КРУТЫЕ!!! Такие часы
                заставят любую девушку обратить на тебя внимание. Теперь одни из моих любимчиков. ))</p>
        </div>
        <div id="text10"><img src="img/6.png" border="0"><span style="color:#FFA500; font-size:28px; text-align:center;">Ваше Имя</span><br>
          <p>Вы можете написать нам свой отзыв и мы обязательно разместим его на нашем сайте.
		  Приложите Вашу фотографию с приобретенным товаром!
		  </p><p>Отзывы присылать по адресу: help@101shops.ru</p><p></p>
          <div name="l4"></div>
          <p></p>
        </div>
      </div>
    </div>
    <h2>ЗАКАЖИТЕ ЧАСЫ ВАШЕЙ МЕЧТЫ СО СКИДКОЙ 70%</h2>
    <div id="block_2">
      <div class="main"> <img src="img/ulysse-nardin.png" style="width: 35%; height: auto; margin-bottom: 25%;" border="0" align="left">
        <div id="text1">СПЕШИТЕ! ИЗ 200 <x1>КОМПЛЕКТОВ ОСТАЛОСЬ</x1> ВСЕГО <x2>11</x2></div>
        <div id="text2">СТАРАЯ ЦЕНА: <b><strike>9650</strike>р.</b></div>
        <div id="text3">НОВАЯ ЦЕНА: <b>2890 р.</b></div>
        <br>
        <br>
        <a href="#openModal" class="button"></a>
        <div id="text4">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div>
        
        <iframe scrolling="no" src="watch.html" frameborder="0"></iframe>
      </div>
    </div>
    <div id="line2"></div>
    <h1>НАШИ ПРЕИМУЩЕСТВА</h1>
    <div id="block_4">
      <div class="main">
        <ul>
          <li><img src="img/05d.png" border="0" align="left">Мы работаем
              без предоплаты. Вы оплачиваете Посылку только при получении
            в Ваши руки в Отделении Почты.</li>
          <li><img src="img/05d.png" border="0" align="left">С каждым заказом
            мы отправляем ценный подарок.</li>
          <li><img src="img/05d.png" border="0" align="left">Доставим в ЛЮБОЙ
              регион.</li>
          <li><img src="img/05d.png" border="0" align="left">Надежная
              упаковка, способная уберечь ваш заказ от повреждений
            (картонные коробки, воздушно-пузырьковая (пузырчатая) пленка,
            пенопласт).</li>
          <li><img src="img/05d.png" border="0" align="left">Быстрая доставка,
            5-10 дней (зависит от региона).</li>
          <li><img src="img/05d.png" border="0" align="left">Летняя Скидка: -70% на часы Skeleton Winner.</li>
          <li><img src="img/05d.png" border="0" align="left">Гарантия 12
              месяцев с момента получения.</li>
          <li><img src="img/05d.png" border="0" align="left">Гарантия
              возврата денег, если часы не понравятся.</li>
          <li><img src="img/05d.png" border="0" align="left">Дорогие часы
            вызывают доверие у банковских работников и помогают проще получить
            кредит.</li>
          <li><img src="img/05d.png" border="0" align="left">Красивые и
            качественные часы Skeleton Winner позволят Вам в считанные секунды
            располагать собеседника к себе на встречах и важных переговорах.</li>
          <li><img src="img/05d.png" border="0" align="left">Когда часы
            Skeleton Winner на вашей руке, противоположный пол не сможет устоять
            перед вами.</li>
        </ul>
      </div>
    </div>
    <div name="l2" class="anchor_l2"></div>
    <h1>ДОСТАВКА И ОПЛАТА</h1>
    <div id="block_5">
      <div class="main"> <img src="img/pochta_rossii_stala_strategicheskim_obektom.jpg" style="width: 35%; height: auto;" border="0" align="left">
        <h4>Доставка Почтой России</h4>
        <p>Мы вам доверяем и не требуем с вас предоплаты.<br>
          Мы уважаем ваше время, и поэтому все заказы оперативно отправляем почт.
            бандеролями 1 класса.<br>
          Вы можете забрать свой заказ на почте в любое удобное для вас время.<br>
          Стоимость доставки от 350 р.<br>
          Доставка займет 5-10 рабочих дней. (в зависимости от
          региона)<br>
          Чтобы ускорить прибытие вашего заказа, мы отправляем бандероли с
          Главпочтампта два раза в день, включая выходные дни.</p>
        <p>Оплата осуществляется в почтовом отделении при
            получении.</p>
			 <br>
        <img src="img/wallet_256.jpg" id="im1" border="0" align="left">
		<p>Оплата заказа наложенным платежом:<br>
          Получить заказ можно в почтовом отделении, индекс которого был указан
          при оформлении заказа. Уведомление о доставке заказа придет по вашему
          адресу. Если уведомление вам не поступило, то через 10 дней сходите на
          почту самостоятельно. Скорее всего ваши часы уже ждут вас на почте.</p>
        <p>Для получения заказа на почте возьмите с собой паспорт.<br>
          Срок хранения заказа в почтовом отделении составляет 1 месяц с момента
          поступления. Просим вас своевременно получить пришедший заказ.</p>
        <img src="img/guaranteebadge.png" id="im1" border="0" align="left">
        <p>Гарантии</p>
        <p>Мы заботимся о своей репутации, довольные клиенты для нас - на
            первом месте!</p>
        <p>Мы соблюдаем закон "О защите прав потребителя" Если в течение 14 дней
          после получения покупки, вы по какой-то причиние решили вернуть
          деньги. Вам достаточно свазаться с нашими менеджерами. Мы без
            лишних вопросов примем ваш возврат!</p>
      </div>
    </div>
    <h2>ЗАКАЖИТЕ ЧАСЫ ВАШЕЙ МЕЧТЫ В 1 КЛИК!</h2>
    <div id="block_2">
      <div class="main2"> <a href="#openModal" class="button"></a> </div>
    </div>
    <br>
    <div id="block_6">
      <div class="main">
        <div style="float: left; width: 50%; padding-top: 4%; font-size: 90%; color: rgb(255, 218, 185);" align="left">
            <?= REQUISITES ?><br>
            Все права защищены. Copyright © 2016.<br>
            <a style="color: rgb(255, 218, 185);" href="politika.html" target="new"><br>
            Политика конфиденциальности</a><br>
        
      </div>
    </div>

    <div id="window">
      <div class="bell-close"></div>
      <div class="tit1">ВОПРОСЫ И ОТВЕТЫ:</div>
      <br>
      <div class="tit2">- Как действует ваша гарантия?
        <p>Если получив товар, Вы увидите, что упаковка или сам товар повреждены
          (в пути всякое может случится, хотя за 2 года работы и более 3000
          отправлений у нас был только 1 подобный случай), Вам достаточно просто
          позвонить нашим менеджерам, и мы бесплатно заменим Вам товар на новый.
          По Закону о Правах Потребителя вы также в течение 14 дней можете
          отказаться от покупки, и мы вернем Вам полную стоимость оплаты заказа
          за исключением расходов на доставку (возврат возможен только при
          условии сохранения его в том виде, в котором вы его получили). Мы
          заботимся о своей репутации, довольные клиенты для нас - на первом
          месте!</p>
        - Какова Стоимость доставки?
        <p>За доставку почта России берет от 350 рублей + небольшой почтовый сбор
          при получении (в пределах 100 рублей).</p>
        - Что входит в комплект поставки?
        <p>Элитные Часы Skeleton Winner;<br>
          Коробочка для часов(черная с подушечкой);<br>
         </p>
      </div>
    </div>
    
	

	

  


</div>



</body>
<!-- Mirrored from skeleton4.true-gooods.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jul 2016 07:40:45 GMT -->
</html>
