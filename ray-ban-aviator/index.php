<?php include ("./../config.php"); ?>

<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<title>Ray-Ban. Солнцезащитные очки Ray-Ban Aviator, Wayfarer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="yved/style.css">

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="yved/script.js"></script>
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

<div class="header">
	<div class="container">
		<div class="header_block">
			<div class="logo">
				<a href="index.html">
					<div class="logo_img" title="Ray-Ban">
						&nbsp;
					</div>
				</a>
			</div>
			<div class="contact">
				<div class="txt">
					+7(952)-925-03-48
				</div>
			</div>
			<div class="clear"></div>
			<div class="text_block">
				<p>«Ray-Ban» — очки, увековеченные в истории!</p>
			</div>
			<div class="form_block">
				<form action="<?= MAIN_DOMAIN ?>order.php" id="form" method="POST">
					<div class="title">
						<p>Закажите очки Ray-Ban прямо сейчас</p>
						<p style="font-weight: bold;">по акции <span> со скидкой 70%!</span></p>
					</div>
					<div class="inputs">
						<div><input type="text" id="name" name="name" required placeholder="Ваше имя"></div>
						<div><input type="text" id="phone" name="phone" required placeholder="Ваш телефон"></div>
					</div>
					<div class="submit">
						<input type="submit" value="Заказать">
					</div>

					<input name="item_name" value="Ray Ban Aviator" type="hidden"/>
					<input name="item_price" value="1590" type="hidden"/>
					<input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
				</form>

				<div id="timer-box">
					<div class="timer" align="center">
						<div class="digits"></div>
					</div>
				</div>
				<p class="ads_site">*Торопитесь! Осталось всего 9 комплектов.

				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<div class="catalog">
	<a name="catalog">
		<div class="container">

			<div id="ochki"></div>

			<div class="title">Успей заказать очки с сумасшедшей скидкой 70%</div>

			<div class="content">
				<div>
					<div class="item">
						<a class="rayban" href="catalog/b1.jpg" data-lightbox="Aviator 3025 001/51"><img src="catalog/1.png"></a>
						<p class="bold px20 center title2">'Испепеляющий взгляд' синие</p>
						<p class="center" style="padding-top: 10px;"><span class="lastprice light">5300 руб</span><span class="newprice bold px26">1590 руб</span></p>
					</div>
					<div class="item">
						<a class="rayban" href="catalog/b2.jpg" data-lightbox="Wayfarer 2140 901/32"><img src="catalog/2.png"></a>
						<p class="bold px20 center title2">'Ослепительный взгляд' коричневые</p>
						<p class="center" style="padding-top: 10px;"><span class="lastprice light">5300 руб</span><span class="newprice bold px26">1590 руб</span></p>
					</div>
					<div class="item">
						<a class="rayban" href="catalog/b3.jpg" data-lightbox="Aviator 3025 112/17"><img src="catalog/3.png"></a>
						<p class="bold px20 center title2">'Обжигающий взгляд' оранжевые</p>
						<p class="center" style="padding-top: 10px;"><span class="lastprice light">5300 руб</span><span class="newprice bold px26">1590 руб</span></p>
					</div>


					<div class="models">
						<p class="px30 black center">Выбрали модель?</p>
						<p class="px26 regular center" style="padding-top:7px;padding-bottom:30px;">Закажите прямо сейчас!</p>
						<a href="#" style="text-decoration: none;" onclick="return false;"><div class="btn bold px26" style="margin:0 auto;" onclick="bg_p_open()">Заказать</div></a>
					</div>

					<div class="clear"></div>

					<div id="timer-box">
						<div class="timer" align="center">
							<div class="digits"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>


<div class="work_process">
	<a name="work_process"><a/>
		<div class="container">
			<div class="title">Почему к нам обратились уже более 9 000 клиентов?</div>
			<div class="sub_title">Быть нашим клиентом одно удовольствие! И вот почему:</div>
			<div class="processes">
				<div class="process">
					<div class="img">
						<img src="images/icons/delivery.png" alt="">
					</div>
					<div class="title_p">Доставка в течении 2-7 дней</div>
				</div>

				<div class="process">
					<div class="img">
						<img src="images/icons/best.png" alt="">
					</div>
					<div class="title_p">Несравненное итальянское качество</div>
				</div>

				<div class="process">
					<div class="img">
						<img src="images/icons/money.png" alt="">
					</div>
					<div class="title_p">Цены от производителя</div>
				</div>

				<div class="process process_mobile">
					<div class="img">
						<img src="images/icons/24hour.png" alt="">
					</div>
					<div class="title_p">Круглосуточный прием заказов</div>
				</div>

				<div class="process">
					<div class="img">
						<img src="images/icons/cash.png" alt="">
					</div>
					<div class="title_p">Оплата при получении заказа</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
</div>


<div class="sunglass">
	<a name="sunglass"><a/>
		<div class="container characteristics">
			<div class="title">ХАРАКТЕРИСТИКИ</div>
			<ul>
				<li>Очки Ray-Ban никогда не выйдут<br>из моды и подходят всем</li>
				<li><span class="text1">Поляризованные линзы </span></li>
				<li>В комплекте футляр для хранения<br>и салфетка для ухода</li>
				<li>Классический универсальный дизайн</li>
				<li>Проверенная конструкция петель<br>никогда не подведет</li>
			</ul>
		</div>
</div>

<div class="celebrities">
	<a name="celebrities"><a/>
		<div class="container container_mobile">
			<div class="title">Ray-Ban это выбор знаменитостей.<br>Присоединяйтесь  к ним!</div>
			<div class="photos">
				<div class="photo">
					<div class="img">
						<img src="images/celebrities/jennifer-aniston.jpg" alt="">
					</div>
					<div class="title_p">Дженнифер Энистон</div>
				</div>
			</div>

			<div class="photos">
				<div class="photo">
					<div class="img">
						<img src="images/celebrities/megan-fox.jpg" alt="">
					</div>
					<div class="title_p">Меган Фокс</div>
				</div>
			</div>

			<div class="photos">
				<div class="photo">
					<div class="img">
						<img src="images/celebrities/victoria-beckham.jpg" alt="">
					</div>
					<div class="title_p">Виктория Бэкхем</div>
				</div>
			</div>

			<div class="clear_mobile"></div>

			<div class="photos photos_mobile">
				<div class="photo">
					<div class="img">
						<img src="images/celebrities/tom-cruise.jpg" alt="">
					</div>
					<div class="title_p">Том Круз</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
</div>

<div class="sunglass">
	<div class="container">
		<div class="comments">
			<div class="title">Что говорят о нас наши клиенты</div>
			<div class="comment">
				<div class="avatar">
					<img src="images/reviews/otzyv1.jpg" alt="">
				</div>
				<div class="text">
					<div class="txt">
						После того как разбились мои Ray Ban я была очень расстроена что придется покупать снова дорогие очки. Ведь они стоили мне почти 7 000 рублей. А тут еще и курс резко вырос и все подорожало. Случайно нашла этот магазин, решила заказать и не пожалела. Все что пишут насчет качества - абсолютная правда. И я не вижу разницы между теми оригиналами что я носила раньше.
					</div>
					<div class="person">
						Виктория Шатирова. Москва
					</div>
				</div>
			</div>
			<div class="comment">
				<div class="avatar">
					<img src="images/reviews/otzyv2.jpg" alt="">
				</div>
				<div class="text">
					<div class="txt">
						Очень потрясные очки, быстро доставили ко мне в Краснодар. Качество действительно оправдывает цену на 100%! Покупала уже в прошлом году Ray-Ban в интернете, но нарвалась на подделку от которой при ношении даже болели глаза((( . Берите тут смело - ребята не подведут с качеством!
					</div>
					<div class="person">
						Оксана Маевская. Краснодар
					</div>
				</div>
			</div>
			<div class="comment">
				<div class="avatar">
					<img src="images/reviews/otzyv4.jpg" alt="">
				</div>
				<div class="text">
					<div class="txt">
						Полностью удовлетворен покупкой. Было вначале сомнение, что пришлют подделку за 500 руб., которых летом полно на рынках и в переходах. Но я получил действительно очки превосходного качества! Ходил специально в магазин на Охотном ряду и сравнивал. Дал ради прикола консультантам оценить, даже они сказали, что очки оригинальные)) Возьму еще, пока скидка!)
					</div>
					<div class="person">
						Николай Костюков. Москва
					</div>
				</div>
			</div>
			<div class="comment">
				<div class="avatar">
					<img src="images/reviews/otzyv3.jpg" alt="">
				</div>
				<div class="text">
					<div class="txt">
						Не пожалел, что остановился на выборе именно этих очков – очень удобные, подчеркивают стиль! Девочкам нравится))) Спасибо вам огромное – обслуживание, как и сами очки, на высшем уровне! Рекомендую этот магазин!
					</div>
					<div class="person">
						Александр Семенков. Санкт-Петербург
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="vkcomments">
				<img src="images/reviews/otzyvi-vkontakte.png" alt="">
			</div>
		</div>
	</div>
</div>


<div class="sub_footer" id="order">
	<a name="order"><a/>
		<div class="container">
			<div class="title">
				Сделайте прекрасный подарок себе или близким!<br>Закажите самый модный аксессуар этого лета!
			</div>
			<div class="form">
				<form action="<?= MAIN_DOMAIN ?>order.php" id="form_b" method="POST">
					<div class="title_f">
						Закажите очки Ray-Ban прямо сейчас<br><span>по акции <span>со скидкой 70%!</span></span>
					</div>
					<div class="forms">
						<div class="line">&nbsp;</div>
						<div class="inpt"><input type="text" id="name_b" required name="name" placeholder="Ваше имя"></div>
						<div class="inpt"><input type="text" id="phone_b" required name="phone" placeholder="Ваш телефон"></div>
						<div class="submit"><input type="submit" value="Заказать"></div>
						<div id="timer-box">
							<div class="timer" align="center">
								<div class="digits"></div>
							</div>
						</div>
						<div class="ads">*Торопитесь! Осталось всего 9 комплектов.

						</div>
					</div>

					<input name="item_name" value="Ray Ban Aviator" type="hidden"/>
					<input name="item_price" value="1590" type="hidden"/>
					<input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
				</form>
			</div>
		</div>
</div>
<div class="clear"></div>
<footer>
	<div class="container">
		<div class="footer">
			<div class="browser_width grpelem" id="u13219"><!-- group -->
				<div class="clearfix" id="u13219_align_to_page">
					<div class="clearfix grpelem" id="u13228-10"><!-- content -->
						<p><img src="<?= MAIN_DOMAIN ?>common/img/cop_w.png"></p>
						<p>Все права защищены. Copyright © 2016</p>
					</div>
					<div class="clearfix grpelem" id="u13247-4" onclick="showPrivacyPolicy()"><!-- content -->
						<p>Политика конфиденциальности</p>
					</div>
					<div class="clearfix grpelem" id="u13229-12"><!-- content -->
						<p id="u13229-2">Звонок по России бесплатный</p>
						<p id="u13229-4">+7 (952) 925&#45;03&#45;48</p>
						<p id="u13229-6">время работы с 09.00 до 18.00</p>
						<p id="u13229-7">&nbsp;</p>
						<p id="u13229-10"><span id="u13229-8">Служба поддержки клиентов: </span>help@101shops.ru</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="bg_p">
	<form action="<?= MAIN_DOMAIN ?>order.php" id="form_p" method="POST">
		<div class="close" onclick="bg_p ()"></div>
		<div class="title_f">
			Закажите очки Ray-Ban прямо сейчас<br><span>по акции <span>со скидкой 70%!</span></span>
		</div>
		<div class="forms">
			<div class="line">&nbsp;</div>
			<div class="inpt"><input type="text" id="name_p" required name="name" placeholder="Ваше имя"></div>
			<div class="inpt"><input type="text" id="phone_p" required name="phone" placeholder="Ваш телефон"></div>
			<div class="submit"><input type="submit" value="Заказать"></div>
			<div class="ads">*Торопитесь! Осталось всего 9 комплектов.



			</div>
		</div>

		<input name="item_name" value="Ray Ban Aviator" type="hidden"/>
		<input name="item_price" value="1590" type="hidden"/>
		<input name="client_time_zone" class="client_time_zone" value="" type="hidden"/>
	</form>
</div>

<script type="text/javascript">
	function bg () {
		var thanks = document.getElementById('bg');
		thanks.style.opacity = '0';
		thanks.style.height = '0px';
	}
	function bg_p () {
		var thanks = document.getElementById('bg_p');
		thanks.style.opacity = '0';
		thanks.style.height = '0px';
	}

	function bg_p_open () {
		var thanks = document.getElementById('bg_p');
		thanks.style.opacity = '1';
		thanks.style.height = '100%';
	}

	function error () {
		var thanks = document.getElementById('error');
		thanks.style.opacity = '0';
		thanks.style.height = '0px';
	}

	function showPrivacyPolicy() {
		$('#privacyPolicy').show();
	}

	$(document).ready(function(){
		setInterval(function(){
			var now = new Date();
			var startdate = new Date(2014,00,14,00,00,00).getTime();
			var nowdate = now.getTime();
			var period = 36*60*3*1000;
			while(startdate < nowdate){
				startdate=startdate+period;
			}
			var totalRemains = (startdate-nowdate);
			if (totalRemains>1){
				var RemainsSec=(parseInt(totalRemains/1000));
				var RemainsFullDays=(parseInt(RemainsSec/(24*60*60)));
				var secInLastDay=RemainsSec-RemainsFullDays*24*3600;
				if (RemainsFullDays<10){RemainsFullDays="0"+RemainsFullDays};
				var RemainsFullHours=(parseInt(secInLastDay/3600));
				if (RemainsFullHours<10){RemainsFullHours="0"+RemainsFullHours};
				var secInLastHour=secInLastDay-RemainsFullHours*3600;
				var RemainsMinutes=(parseInt(secInLastHour/60));
				if (RemainsMinutes<10){RemainsMinutes="0"+RemainsMinutes};
				var lastSec=secInLastHour-RemainsMinutes*60;
				if (lastSec<10){lastSec="0"+lastSec};
				$('.timer>.digits').html(RemainsFullDays+":"+RemainsFullHours+":"+RemainsMinutes+":"+lastSec);
			}
			else {$(".timer").remove();}
		},1000);
		$( "#u13236" ).click(function() {
			$('#privacyPolicy').hide();
		});
		$( ".overlayWedge" ).click(function() {
			$('#privacyPolicy').hide();
		});
	});
</script>


<div class="yvedw">
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Кирилл Лаврентьев, г.Москва, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Прохор Матвеев, г.Липецк, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Вениамин Артёмов, г.Екатеринбург, сделал заказ на сумму 3180р, число 2 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Эмиль Измайлов, г.Климовск, сделал заказ на сумму 4770р, число 3 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Ефрем Беляков, г.Салехард, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Люция Горбунова, г.Уссурийск, сделала заказ на сумму 3180р, число 2 шт</div></div>
	</div>
	<div class="yved yvedf2">
		<img src="yved/yico2.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Дмитрий Маслов, г.Киров, оставил заявку на обратный звонок</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Алексей Комаров, г.Москва, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Виктор Бодров, г.Санкт-Петербург, сделал заказ на сумму 4770р, число 3 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Дмитрий Веселяк, г.Рязань, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Андрей Фирсов, г. Стерлитамак, сделал заказ на сумму 3180р, число 2 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Александр Баляков, г.Белгород, сделал заказ на сумму 1590, число 1 шт</div></div>
	</div>
	<div class="yved yvedf2">
		<img src="yved/yico2.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Ольга Скибина, г.Калининград, оставила заявку на обратный звонок</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Павел Трунин, г.Краснодар, сделал заказ на сумму 3180р, число 2 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Дмитрий Колесников, г.Мурманск, сделал заказ на сумму 4770р, число 3 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Виктор Файназулин, г.Москва, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Алексей Иванов, г.Санкт-Петербург, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf2">
		<img src="yved/yico2.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Наталья Лаговец, г.Нижний Новгород, оставила заявку на обратный звонок</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Юрий Деркачев, г.Воронеж, сделал заказ на сумму 31800р, число 2 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Александр Петров, г.Владивосток, сделал заказ на сумму 1590р, число 1 шт</div></div>
	</div>
	<div class="yved yvedf1">
		<img src="yved/yico.png" alt="" class="yvedi">
		<div class="yvedvt"><div class="yvedt">Татьяна Филатова, г.Пенза, сделала заказ на сумму 3180р, число 2 шт</div></div>
	</div>
</div>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36705905 = new Ya.Metrika({ id:36705905, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36705905" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<div id="privacyPolicy" style="display:none; position: absolute; top: 0px; left: 0px; z-index: 100001; width: 1900px; height: 4600px;">
	<div style="position: absolute; top: 0px; left: 0px;"><div id="u13238" style="left: 0px; top: 0px; width: auto; height: auto; padding: 0px; margin: 0px; z-index: auto;"><div class="overlayWedge" style="width: 1900px; height: 4600px;"></div></div></div>
	<div class="LightboxContent" style="position: fixed; left: 141px; top: 100px;">
		<div class="ContainerGroup rgba-background clearfix" ><!-- stack box -->

			<div class="Container clearfix grpelem wp-panel" id="u13239" style="position: absolute; left: 0px; top: 0px;"><!-- group -->
				<div class="clearfix grpelem" id="u13241-4"><!-- content -->
					<p>Оставляя заявку на нашем сайте Вы даете свое согласие на обработку Ваших персональных данных. Полученные персональные данные не подлежат представлению третьим лицам без Вашего письменного согласия и используются исключительно для достижения вышеизложенной цели. Полученные персональные данные обрабатываются в течение одного дня с момента их получения. Срок хранения персональных данных составляет 14 дней с момента их получения. Обработка персональных данных осуществляется в соответствии с Федеральным законом от 27.07.2006 N 152-ФЗ (ред. от 23.07.2013) "О персональных данных"</p>
				</div>
			</div></div><div class="PamphletCloseButton PamphletLightboxPart popup_element clearfix" id="u13236" style="left: 594px; top: 1px;"><!-- group -->
			<div class="clearfix grpelem" id="u13237-4"><!-- content -->
				<p>x</p>
			</div>
		</div></div></div>

</body>


</html>