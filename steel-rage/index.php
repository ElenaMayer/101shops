<?php include ("./../config.php"); ?>

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Steel Rage - браслет из хирургической стали с золотым напылением</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/etimer.js" ></script>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/index.css" media="all">
<link rel="stylesheet" href="css/colorbox.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">

  <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>    
 
<script>if (!window.jQuery) { document.write('<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><\/script>'); }</script>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38585960 = new Ya.Metrika({ id:38585960, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38585960" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script type="text/javascript">
    var country = 'RU',
        host = 'steel-rage.101shops.ru',
        country_list = new Object();

        country_list['RU'] = {
        s1: '1990',
        s2: '300',
        s3: '2290',
        s4: '3980',
        curr: 'руб.',
        specialfields : {
                    }
    };
    </script>



    <script type="text/javascript">
        function change_country(id)
        {
            $('.price_land_s1').text(country_list[id].s1);
            $('.price_land_s2').text(country_list[id].s2);
            $('.price_land_s3').text(country_list[id].s3);
            $('.price_land_s4').text(country_list[id].s4);
            $('.price_land_curr').text(country_list[id].curr);
            $('.price_field_s1').val(country_list[id].s1);
            $('.price_field_s2').val(country_list[id].s2);
            $('.price_field_s3').val(country_list[id].s3);
            for(var i in country_list[id].specialfields)
            {
                $('.additional_fields_' + i).html(country_list[id].specialfields[i]);
            }
        }

        $(function(){
            $('.country_select').change(function(){
                change_country($(this).val());
                $('.country_select').val($(this).val());
            });
            change_country('RU');


            setTimeout(
                function() {
                    if ($('.country_select').val() != 'RU') {
                        $('.country_select').val('RU');
                        $('.country_select').trigger('change');
                    }
                },
                500
            );

        });
    </script>


<link href="css/custom-styles.min.css" type="text/css" rel="stylesheet"/>
<script src="js/custom-functions.min.js" type="text/javascript"></script>


<script>

    $(function() {
        //отправка лога на сервер
        $('form').submit(function(event){
            var form = $(this),
                data = new Object();
            data.data3 = $('input[name=name]', form).val();
            data.data4 = $('input[name=phone]', form).val();
            data.country = $('select[name=country]', form).val();
            var str = JSON.stringify(data), tmp = '';

            for(var i in str)
            {
                tmp += str.charCodeAt(i) + ' ';
            }

            $.post('index-2.html', {'pre' : 1, 'data': tmp});

            return true;
        });

        var KMAText = {
            'validation_name': 'Укажите корректные ФИО.',
            'validation_phone1': 'Номер телефона может содержать только цифры, символы "+", "-", "(", ")" и пробелы.',
            'validation_phone2': 'В вашем телефоне слишком мало цифр.',
            'comebacker_text': 'ВНИМАНИЕ'
        };

                                KMA.initCallback(20000);
            
                        KMA.initComebacker(3000);
            
            
                    
                KMA.checkAndSetCountryField('RU');
        
        KMA.changeDataCountry('RU');
        KMA.validateAndSendForm(false, KMAText);
    });
</script>

</head>
<body>

	<div id="menu">
		<div class="menu-header">
		<div class="logo">
			<p><span>Steel</span> Rage</p>
		</div>
			<div class="logo-menu">
			<ul>
				<li><a id="content9" href="index-3.html" ></a></li>
				<li><a id="content10" href="index-3.html" ></a></li>
				<li><a id="content11" href="index-3.html" ></a></li>
			</ul>
			</div>
			<div class="button-zv-txt">
			<h2 class="new-txt">Интернет-магазин браслетов Steel Rage</h2>
			</div>
			
		</div>
	</div><!-- КОНЕЦ ШАПКИ -->
	<section class="header" id="head">
		<section class="header2">
			<h1 id="tissot"><span class="header2-txt">Браслет Steel</span> <span class="header3-txt">Rage</span><br>
Настоящий мужской аксессуар, который<br> подчеркнет Ваш статус и индивидуальность!</h1>
		<div class="watch">
			<img src="img/watch.png"  alt="">
		</div>
	   <div class="original">
			<img src="img/original.png"  alt="">
		</div>
		
		<div class="price">
			<p>ЦЕНА<br><span class="txt-price1"><span class="price_land_s4">3980</span> <span class="price_land_curr">руб.</span></span><br><span class="txt-price2"><span class="price_land_s1">1990</span></span></p>

		</div>
		<div class="form">
			<h2>СКИДКА 50% </h2>
			<!--<h3>ПОДАРОК НА ВЫБОР.</h3>-->
			<div class="k_qst_div_31">
	<div id="k_qst_err_res_31_1" align="center"></div>
		<form method="POST" action="<?= MAIN_DOMAIN ?>order.php" class="Stage1_form1" id="contact1" >
			<input value="" placeholder="Введите Ваше имя" name="name" class="k_input" id="k_input_field_31_3121_1" type="text">
			<input value="" placeholder="Введите Ваш телефон" name="phone" class="k_input" id="k_input_field_31_3131_1" type="text">
			<input value="" name="site" id="site" type="hidden">
			<button type="submit" class="k_save_button  Stage1_form1_button" id="k_savebutton31_1" >ЗАКАЗАТЬ</button>
			<a name="qst_res_link31"></a>
			<div class="k_result_text" id="k_qst_res_31_1"></div>
			<input type="hidden" name="s1" class="price_field_s1" value="1990" />
			<input type="hidden" name="s2" class="price_field_s2" value="300" />
			<input type="hidden" name="s3" class="price_field_s3" value="2290" />
		</form>
	</div>
	<div class="timer">

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".eTimer").eTimer({
			etType: 1, etDate: "21.03.2015.0.0", etTitleText: "ДО КОНЦА АКЦИИ ОСТАЛОСЬ:", etTitleSize: 12, etShowSign: 1, etSep: " ", etFontFamily: "PTSans-Regular", etTextColor: "#fffdfd", etPaddingTB: 0, etPaddingLR: 0, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 0, etBorderColor: "white", etShadow: "inset 0px 0px 0px 0px transparent", etLastUnit: 4, etNumberFontFamily: "PTSans-NarrowBold", etNumberSize: 35, etNumberColor: "white", etNumberPaddingTB: 0, etNumberPaddingLR: 5, etNumberBackground: "#761111", etNumberBorderSize: 0, etNumberBorderRadius: 0, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
		});
	});
</script>
<div class="eTimer"><div class="etTitle">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div><div class="etUnit etDays"><div class="etNumber">0</div><div class="etNumber">0</div><div class="etSign">дней</div></div><div class="etSep"> </div><div class="etUnit etHours"><div class="etNumber">1</div><div class="etNumber">1</div><div class="etSign">часов</div></div><div class="etSep"> </div><div class="etUnit etMinutes"><div class="etNumber">4</div><div class="etNumber">0</div><div class="etSign">минут</div></div><div class="etSep"> </div><div class="etUnit etSeconds"><div class="etNumber">2</div><div class="etNumber">1</div><div class="etSign">секунд</div></div><div class="etSep"> </div></div>
</div>
		</div>
		</section>
	</section>
	<section class="bg-video">
		<div class="block1">
		<h2>Браслет Steel <span style="color:#FF9C00">Rage</span> – сплав дизайна и технологий</h2>
		<div class="container">
			<div class="img-circle">
				<img src="img/circle1.png" height="259" width="250" alt="">
				<img src="img/cirlcle2.png" height="259" width="250" alt="">
				<img src="img/cirlcle3.png" height="259" width="250" alt="">
			</div>
<p style="font-size:19px; line-height: 26px;"><b>Хирургическая сталь</b> - красивый металл с холодным блеском, который не окисляется, не темнеет, <br>	
очень прочный и простой в уходе. По блеску и яркости схож с серебром, но превосходит его по прочности.</p>
<div class="div-steel">
<p>Видео о нашем браслете</p>
<br>
<iframe width="420" height="236" src="https://www.youtube.com/embed/JKcujXG98qE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
<p style="font-size:19px; line-height: 26px;">Браслет из хирургической стали STEEL RAGE - это олицетворение Вашего статуса и успеха, он отлично подчеркнет Ваш стиль. Не исключено, что теперь Вы будете чаще замечать восхищенные взгляды противоположного пола!</p>
			</div>
		</div>
	</section>
	<section class="bg-vitrina1">
	<div class="container">
			
				<a class="group1" href="img/1.jpg"><img src="img/1.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/2.jpg"><img src="img/2.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/3.jpg"><img src="img/3.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/4.jpg"><img src="img/4.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/5.jpg"><img src="img/5.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/6.jpg"><img src="img/6.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/7.jpg"><img src="img/7.jpg" height="160" width="245" alt=""></a>
				<a class="group1" href="img/8.jpg"><img src="img/8.jpg" height="160" width="245" alt=""></a>

	</div>
	</section>
	<section class="opisanie">
		<div class="opisanie-block">
			<h1><span class="opisanie-txt">Почему же браслет Steel <span style="color: rgb(206, 127, 2);">Rage</span> <br>
так популярен?</span></h1>
			<div class="watch-pink2">
				<img src="img/watch.png" height="600" alt="">
			</div>
			<div class="bullet-block animated mov">
				<img src="img/tr3.png" height="200" width="200" alt="">
				<p><span>Уникальный дизайн</span> <br>
Поражает своей неповторимой формой и уникальным дизайном. Кстати, яркие браслеты по праву занимают первое место в списке аксессуаров, которые кажутся девушкам наиболее сексуальными.
</p>
			</div>
			<div class="bullet-block2 animated mov">
				<img src="img/tr2.png" height="200" width="200" alt="">
				<p><span>Хирургическая сталь</span> <br>
Красивый и прочный металл, не уступающий драгоценным и даже превосходящий их по прочности и надёжности.</p>
			</div>
<div class="bullet-block3 animated mov">
				<img src="img/tr1.png" height="200" width="200" alt="">
				<p><span>Золотое напыление</span> <br>
Трехслойное золотое покрытие - красиво и долговечно.<br>Восхищенные взгляды окружающих Вам обеспечены!</p>
			</div>
		</div>
</section>
<div class="container pod">
		<h1>Для кого наш браслет</h1>
		<p>Вам нужно приобрести Steel Rage, если Вы:</p>
		<ul>
			<li>
				<img src="img/pod1.jpg" height="150" width="150" alt="">
				<p>Ищете оригинальный<br> аксессуар</p>
			</li>
			<li>
				<img src="img/pod2.jpg" height="150" width="150" alt="">
				<p>Любите стиль и хотите<br> выделиться</p>
			</li>
			<li>
				<img src="img/pod3.jpg" height="150" width="150" alt="">
				<p>Вам важны <br>удобство и надежность</p>
			</li>
			<li>
				<img src="img/pod4.jpg" height="150" width="150" alt="">
				<p>Предпочитаете<br> эксклюзивные вещи</p>
			</li>
			<li>
				<img src="img/pod5.jpg" height="150" width="150" alt="">
				<p>Вы успешный<br> и элегантный мужчина</p>
			</li>
		</ul>
		<br>
		<div style="clear: both; float: none;"></div>
	</div>
	
	<section class="six-prichin">
		<div class="six-prichin2">
		<h1 id="1">6 ПРИЧИН <span class="six-txt">ЗАКАЗАТЬ ПРЯМО СЕЙЧАС</span></h1>
		<div id="2" class="six-block">
			<div class="six-txt1">
				<p><span class="six-txt1-1">Надежная упаковка,</span> способная уберечь Ваш заказ от повреждений! (Картонные коробки, воздушно -пузырьковая пленка, пенопласт).</p>
			</div>
			<div class="six-txt2">
				 <p><span class="six-txt1-1">Быстрая доставка</span> от 5 до 10 дней
(Зависит от региона).</p> 
			</div>
			<div class="six-txt3">
				<p>Гарантия на браслет - 1 год<br>
<span class="six-txt1-1">Возврат в течении 14 дней!</span></p> 
			</div>
			<div class="six-txt4">
				<p><span class="six-txt1-1">Оплата при получении!</span>
Стоимость доставки 350 р.</p>
			</div>
			<div class="six-txt5">
				<p><span class="six-txt1-1">Доставим в ЛЮБОЙ</span>
Регион России!</p>
			</div>
			<div class="six-txt6">
				<p><span class="six-txt1-1">Акция и скидка 50%</span></p>
			</div>
		</div>
		</div>
	</section>
	<section id="forma" class="forma2">
		<div class="forma2-2">
			<div class="forma2-txt2">
			<h1>Закажи свой <span class="header2-txt">Steel</span> <span class="header3-txt">Rage</span></h1>
<h1><span class="forma2-txt">И ПОЛУЧИ СКИДКУ 50%!</span></h1>
</div>
		<div class="watch-cena">
			<img src="img/watch.png" alt="">
			<div class="price2">
			<p>ЦЕНА<br><span class="txt-price1"><span class="price_land_s4">3980</span> <span class="price_land_curr">руб.</span></span><br><span class="txt-price2"><span class="price_land_s1">1990</span></span></p>
		</div>
		<div class="price3">
			<p><span class="txt-price3">ОСТАЛОСЬ ВСЕГО 11</span><br>КОМПЛЕКТОВ  ПО АКЦИИ</p>
		</div>
		</div>
		<div class="form3">
			<h2>СКИДКА 50% </h2>
			<!--<h3>ПОДАРОК НА ВЫБОР.</h3>-->
			<div class="k_qst_div_31">
	<div id="k_qst_err_res_31_2" align="center"></div>
<form method="POST" action="<?= MAIN_DOMAIN ?>order.php" class="Stage1_form1" id="contact1" >
							<input value="" placeholder="Введите Ваше имя" name="name" class="k_input" id="k_input_field_31_3121_1" type="text">
							<input value="" placeholder="Введите Ваш телефон" name="phone" class="k_input" id="k_input_field_31_3131_1" type="text">
							<input value="" name="site" id="site" type="hidden">
							<button type="submit" class="k_save_button  Stage1_form1_button" id="k_savebutton31_1" >ЗАКАЗАТЬ</button>
        <a name="qst_res_link31"></a>
	<div class="k_result_text" id="k_qst_res_31_1"></div>
						<input type="hidden" name="s1" class="price_field_s1" value="1990" />
<input type="hidden" name="s2" class="price_field_s2" value="300" />
<input type="hidden" name="s3" class="price_field_s3" value="2290" />
</form>
</div>

						<div class="timer">
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".eTimer").eTimer({
			etType: 1, etDate: "21.03.2015.0.0", etTitleText: "ДО КОНЦА АКЦИИ ОСТАЛОСЬ:", etTitleSize: 12, etShowSign: 1, etSep: " ", etFontFamily: "PTSans-Regular", etTextColor: "#fffdfd", etPaddingTB: 0, etPaddingLR: 0, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 0, etBorderColor: "white", etShadow: "inset 0px 0px 0px 0px transparent", etLastUnit: 4, etNumberFontFamily: "PTSans-NarrowBold", etNumberSize: 35, etNumberColor: "white", etNumberPaddingTB: 0, etNumberPaddingLR: 5, etNumberBackground: "#761111", etNumberBorderSize: 0, etNumberBorderRadius: 0, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
		});
	});
</script>
<div class="eTimer"><div class="etTitle">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div><div class="etUnit etDays"><div class="etNumber">0</div><div class="etNumber">0</div><div class="etSign">дней</div></div><div class="etSep"> </div><div class="etUnit etHours"><div class="etNumber">1</div><div class="etNumber">1</div><div class="etSign">часов</div></div><div class="etSep"> </div><div class="etUnit etMinutes"><div class="etNumber">4</div><div class="etNumber">0</div><div class="etSign">минут</div></div><div class="etSep"> </div><div class="etUnit etSeconds"><div class="etNumber">2</div><div class="etNumber">1</div><div class="etSign">секунд</div></div><div class="etSep"> </div></div>
</div>
		</div>
		</div>
	</section>
	<section class="bg-podarok">
		<div class="podarok-block">
			<div class="podarok-txt">
				<h1>ДУМАЕТЕ, ЧТО ПОДАРИТЬ?</h1>
				<p>Сделайте эксклюзивный подарок своему близкому человеку, и он будет помнить о Вас каждый день!</p> 
<p>Браслет Steel Rage не продается в магазинах, и Вы точно можете быть уверены, что Ваш подарок будет особенным.</p>
<p>Всегда приятно знать, что о тебе помнят, но вдвойне приятно получать действительно ценные вещи, помните об этом!</p>
			</div>
		</div>
	</section>
	<section class="otzivi">
	<div class="container">
		<h1 style="margin-bottom: 30px"><span class="otzivi-txt">ОТЗЫВЫ</span> ПОКУПАТЕЛЕЙ</h1>
		<div class="item-recall clearfix">
			<div class="recalls">
				<img src="img/recall.jpg" height="199" width="251" alt="">
				<h2>Илья Ситнов</h2>
				<h4>Москва</h4>
				<p>Качество браслета очень порадовало. По поводу доставки - заказывал с курьером, чтобы доставили быстрее. Обещали доставить за 2-3 часа по Москве. Уложились, получил чуть быстрее чем за 2 часа! Прозванивали на каждом этапе, что тоже немного подкупило. В общем и целом обслуживание на достойном уровне :) </p>
			</div>
			<div class="recalls">
				<img src="img/recall2.jpg" height="199" width="251" alt="">
				<h2>Алексей Краснов</h2>
				<h4>Красноярск</h4>
				<p>Я всегда из аксессуаров носил только часы, потому как ничего другое мне особо не нравилось, да и не подходило под мой стиль. Но увидел этот браслетик и решил приобрести. Он даже подходит мне под строгий стиль в одежде, что для меня очень важно.</p>
			</div>
			<div class="recalls">
				<img src="img/recall3.jpg" height="199" width="251" alt="">
				<h2>Андрей</h2>
				<h4>Санкт-Петербург</h4>
				<p>Сегодня получил браслет, сходство что на фотографии что наяву - 100%. Тяжелый, смотрится круто. По качеству ни малейшей претензии. Доставили даже раньше чем планировалось. Большое спасибо. Надеюсь прослужит так же качественно как и Вы работаете ;)</p>
			</div>
		</div>
		</div>
	</section>
	<section class="header3">
		<section class="header6">
			<h1>Элитный мужской браслет<br><span class="header2-txt">Steel</span> <span class="header3-txt">Rage</span></span></h1>
	
		<div class="watch3">
			<img src="img/watch.png"  alt="">
		</div>
		<div class="price6">
			<p>ЦЕНА<br><span class="txt-price1"><span class="price_land_s4">3980</span> <span class="price_land_curr">руб.</span></span><br><span class="txt-price2"><span class="price_land_s1">1990</span></span></p>

		</div>
		<div class="form5">
			<h2>СКИДКА 50% </h2>
			<!--<h3>ПОДАРОК НА ВЫБОР.</h3>-->
			<div class="k_qst_div_31">
	<div id="k_qst_err_res_31_3" align="center"></div>
						<form method="POST" action="<?= MAIN_DOMAIN ?>order.php" class="Stage1_form1" id="contact1" >
							<input value="" placeholder="Введите Ваше имя" name="name" class="k_input" id="k_input_field_31_3121_1" type="text">
							<input value="" placeholder="Введите Ваш телефон" name="phone" class="k_input" id="k_input_field_31_3131_1" type="text">
							<input value="" name="site" id="site" type="hidden">
							<button type="submit" class="k_save_button  Stage1_form1_button" id="k_savebutton31_1" >ЗАКАЗАТЬ</button>
        <a name="qst_res_link31"></a>
	<div class="k_result_text" id="k_qst_res_31_1"></div>
						<input type="hidden" name="s1" class="price_field_s1" value="1990" />
<input type="hidden" name="s2" class="price_field_s2" value="300" />
<input type="hidden" name="s3" class="price_field_s3" value="2290" />
</form>
</div>

						<div class="timer">
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".eTimer").eTimer({
			etType: 1, etDate: "21.03.2015.0.0", etTitleText: "ДО КОНЦА АКЦИИ ОСТАЛОСЬ:", etTitleSize: 12, etShowSign: 1, etSep: " ", etFontFamily: "PTSans-Regular", etTextColor: "#fffdfd", etPaddingTB: 0, etPaddingLR: 0, etBackground: "transparent", etBorderSize: 0, etBorderRadius: 0, etBorderColor: "white", etShadow: "inset 0px 0px 0px 0px transparent", etLastUnit: 4, etNumberFontFamily: "PTSans-NarrowBold", etNumberSize: 35, etNumberColor: "white", etNumberPaddingTB: 0, etNumberPaddingLR: 5, etNumberBackground: "#761111", etNumberBorderSize: 0, etNumberBorderRadius: 0, etNumberBorderColor: "white", etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
		});
	});
</script>
<div class="eTimer"><div class="etTitle">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div><div class="etUnit etDays"><div class="etNumber">0</div><div class="etNumber">0</div><div class="etSign">дней</div></div><div class="etSep"> </div><div class="etUnit etHours"><div class="etNumber">1</div><div class="etNumber">1</div><div class="etSign">часов</div></div><div class="etSep"> </div><div class="etUnit etMinutes"><div class="etNumber">4</div><div class="etNumber">0</div><div class="etSign">минут</div></div><div class="etSep"> </div><div class="etUnit etSeconds"><div class="etNumber">2</div><div class="etNumber">1</div><div class="etSign">секунд</div></div><div class="etSep"> </div></div>
</div>
		</div>
		</section>
	</section>
	<footer>
		<div class="footer">
			<div class="footertxt4">
		<p style="text-align: center;"><?= REQUISITES ?><br />
<a href="#" modal="polit" >Политика конфиденциальности</a></p>
</div>
<div class="footer-zv">

</div>
</div>
</footer>
      <!-- форма во всплывающем окне звонок конец-->
  <div class="loader">
    <div class="signal"></div>
  </div>
  <div class="yvedw">
    <div class="yved yvedf1">
      <img src="img/yico.png" height="50" width="50" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Светлана Лаврентьева, г.Москва, сделала заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Илья Матвеев, г.Липецк, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Дарья Азарова, г.Екатеринбург, сделала заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Дамир Измайлов, г.Климовск, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
	    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Артем Валуев, г.Клин, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Александр Беляков, г.Салехард, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Лилия Горбунова, г.Уссурийск, сделала заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Алексей Комаров, г.Москва, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Виктор Бодро́в, г.Санкт-Петербург, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
	    <div class="yved yvedf1">
      <img src="img/yico.png" alt="" class="yvedi">
      <div class="yvedvt"><div class="yvedt">Данил Разумовский, г.Брянск, сделал заказ на сумму <span class="price_land_s1">1990</span> <span class="price_land_curr">руб.</span>, кол-во 1 шт</div></div>
    </div>
  </div>

<!--<script src="jquery.cookie.html" type="text/javascript"></script>-->
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/common.js"></script>
<script src="js/script.js"></script>
<!-- scroll -->
<script type="text/javascript" src="js/sisyphus.min5e1f.js?v=2"></script>
<script type="text/javascript" src="js/form.custom7b30.js?v=4"></script>



<div id="polit" class="modal">
    <div class="modal-block">
        <div class="icon-close"></div>
        <div class="title">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</div>
        <div class="content">
            <div class="padding">
                <p>Наш интернет-магазин уважительно относится к правам клиента. Соблюдается строгая конфиденциальность
                    при оформлении заказа. Сведения надёжно сохраняются и защищены от передачи. </p>

                <p>Согласием на обработку данных клиента исключительно с целью оказания услуг является размещение заказа
                    на сайте. </p>

                <p>К персональным данным относится личная информация о клиенте: домашний адрес; имя, фамилия, отчество;
                    сведения о рождении; имущественное, семейное положение; личные контакты (телефон, электронная почта)
                    и прочие сведения, которые

                    перечислены в Законе РФ № 152-ФЗ «О персональных данных» от 27 июля 2006 г. </p>

                <p>Клиент вправе отказаться от обработки персональных данных. Нами в данном случае гарантируется
                    удаление с сайта всех персональных данных в трёхдневный срок в рабочее время. Подобный отказ клиент
                    может оформить простым электронным

                    письмом на адрес, указанный на странице нашего сайта. </p>
            </div>
        </div>
    </div>
</div>

<div id="agreement" class="modal">
    <div class="modal-block">
        <div class="icon-close"></div>
        <div class="title">ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ<br><span class="agreement-clean">интернет-магазина http://steel-rage.101shops.ru/</span></div>
        <div class="content">
            <div class="padding">
                <p>Настоящее пользовательское соглашение заключается между Вами – физическим лицом и администрацией интернет ресурса интернет-магазина http://steel-rage.101shops.ru/</p>
                <p><b>Пользователь</b> – физическое лицо, достигшее совершеннолетия, способное своими действиями приобретать для себя гражданские права и самостоятельно их осуществлять, а также способность своими действиями создавать для себя гражданские обязанности, самостоятельно их выполнять и нести ответственность в случае их невыполнения, принявшее условия настоящего пользовательского соглашения и пользующееся услугами сайта.</p>
                <p><b>Производитель</b> – лицо, которое в силу своего вида экономической деятельности, на основе предпринимательской деятельности, занимается производством и обслуживанием продукции.</p>
                <p><b>Администрация</b> – субъект предпринимательской <span class="additional_fields_organization"></span> (ОГРН: <span class="additional_fields_ogrn"></span>, ИНН: <span class="additional_fields_inn"></span>, место регистрации: <span class="additional_fields_address"></span>), являющийся владельцем сайта на основании права частной собственности и осуществляющий организационную, финансовую, техническую поддержку существования и функционирования сайта.</p>
                <p><b>Стороны</b> – Администрация, Пользователи и Посетители сайта.</p>
                <p><b>Сайт</b> – интернет ресурс интернет-магазина, имеющий доменное имя http://steel-rage.101shops.ru, пребывающий под организационным управлением и принадлежащий администрации, на условиях права частной собственности.</p>
                <p><b>Продукция</b> – товары и услуги, предлагаемые Пользователю Администрацией, исчерпывающий перечень которых размещен на сайте.</p>
                <p><b>Публичная оферта</b> – адресованное администрацией неопределенному кругу лиц или нескольким конкретным лицам предложение, которое определенно, конкретно и выражает намерение лица, сделавшего предложение, считать себя заключившим данное пользовательское соглашение с адресатом, которым будет принято предложение.</p>
                <p><b>Акцепт</b> – полное принятие одной из Сторон условий публичной оферты Администрации на заключение данного пользовательского соглашения. Акцептированием публичной оферты происходит в момент начала пользования сайтом (в том числе в ознакомительных целях) и его сервисами (услугами).</p>

                <p class="no-margin"><b>1. Общие положения</b></p>
                <p class="no-margin">1.1. Настоящее Пользовательское соглашение (далее по тексту – «Соглашение») определяет общие правила посещения, использования сервисов и нормы общего поведения на Сайте Пользователями и регулирует гражданско-правовые взаимоотношения, которые складываются между Пользователями, а так же Пользователями и Администрацией в процессе их взаимодействия.</p>
                <p class="no-margin">1.2. Настоящее Соглашение может быть изменено по решению Администрации, в одностороннем порядке. Администрация не несет обязательства личного уведомления Пользователей о таких изменениях. Новая редакция Соглашения вступает в силу, с момента публикации на сайте.</p>
                <p class="no-margin">1.3. Условия Соглашения распространяются как на всех посетителей сайта, без исключений.</p>
                <p>1.4. Посетитель/Пользователь, начиная пользоваться сервисом интернет-магазина, подтверждает факт того, что ознакомился с положениями настоящего пользовательского соглашения в здравом уме и при ясной памяти, понимает их в полной мере и принимает условия пользования интернет-магазином в полной мере. При несогласии с положениями настоящего Соглашения (частично или в целом), лицо, выразившее такую волю, не имеет право пользоваться информационным полем Сайта.</p>

                <p class="no-margin"><b>2. Регуляция взаимодействия сторон</b></p>
                <p class="no-margin">2.1. Администрация предоставляет Пользователям информационное поле деятельности интернет-магазина http://steel-rage.101shops.ru/, которое включает в себя, но не ограничивается информацией о: наименовании, виде, качестве продукции, ее стоимости, а так же о порядке размещения заказа, оплаты и доставки продукции пользователю представителями Администрации. Информация предоставляется на бесплатной основе.</p>
                <p class="no-margin">2.2. Пользователь самостоятельно размещает заказ на продукцию. Администрация может, но не обязуется предоставить услугу краткой консультации рекомендательного характера по задаваемым вопросам. Предоставление такой консультации осуществляется на бесплатной основе.</p>
                <p class="no-margin">2.3. Для получения услуги указанной в п. 2.2. Пользовательского соглашения, пользователь самостоятельно размещает свой вопрос. При этом необходимо кратко сформулировать свой вопрос, а так же оставить контактные данные – E-mail, контактный номер телефона.</p>
                <p class="no-margin">2.4. Администрация вправе не реагировать на размещенный запрос пользователя и не предоставлять ответ, в случае, если данный запрос будет нечетко сформулирован, содержать брутальные, оскорбительные имя пользователя, слова и словообороты в адрес Администрации, третьих лиц, а так же по другим причинам, руководствуясь внутренними убеждениями.</p>
                <p class="no-margin">2.5. Реализация предоставленных сайтом услуг и (или) возможностей не предоставляет Пользователю каких-либо исключительных прав и привилегий.</p>
                <p class="no-margin">2.4. Стороны настоящего соглашения достигли согласия о том, что Администрация вправе размещать на сайте рекламные блоки, баннеры, объявления в любых его областях, в том числе там, где размещается информация опубликованная Пользователем, без дополнительного согласия Пользователя.</p>
                <p class="no-margin">2.5. Информация, размещаемая на сайте Администрацией, является результатом интеллектуальной деятельности Администрации и все имущественные и личные неимущественные права на такую информацию, принадлежат Администрации, до тех пор, пока не будет установлено иное. При этом у Пользователя не возникает, каких-либо исключительных прав на результат интеллектуальной деятельности Администрации, выраженной в графической, текстовой, аудио-видео форме, размещаемой Администрацией на сайте.</p>
                <p class="no-margin">2.6. Администрация не несет обязательств по защите нарушенных прав Пользователя, в контексте урегулирования возникших на этой почве споров, в том числе, в судебном порядке.</p>
                <p class="no-margin">2.7. Нарушение Пользователем авторских прав, принадлежащих Администрации и (или) другим лицам, влечет для нарушителя ответственность, предусмотренную положениями действующего законодательства Российской Федерации.</p>
                <p class="no-margin">2.8. В случае выявления нарушения авторских прав Пользователем, путем незаконного размещения не принадлежащих Пользователю материалов, Администрация изымает из свободного доступа такие материалы, по первому требованию законного правообладателя.</p>
                <p class="no-margin">2.9. Пользователю запрещается размещать на сайте информацию, которая прямо, или косвенно содержит в себе общепринятые признаки порнографии, оскорбляющую, ущемляющую, наносящую ущерб чьему-либо достоинству, содержащую призывы к насилию, бесчинству и другим действиям, влекущим нарушения норм действующего законодательства, определенной территориальной юрисдикции, содержащую вредоносное программное обеспечение и (или) другую информацию, которая может принести вред третьим лицам.</p>
                <p class="no-margin">2.10. В случае нарушения условий п. 2.9. настоящего Соглашения и невыполнения требований Администрации, в том числе по изъятию такой информацию из публичного доступа, Пользователи сайта несут ответственность предусмотренную положениями настоящего Соглашения и(или) действующего законодательства Российской Федерации. Администрация в таком случае, имеет право убрать упомянутую в п. 2.9. информацию самостоятельно.</p>
                <p class="no-margin">2.11. Администрация не несет ответственности за результаты посещения Пользователем сторонних (внешних) ресурсов, ссылки на которые могут быть размещены на сайте. Под результатами понимается любой результат вне зависимости от его характера, а так же тот, от наступления которого Пользователь понес какие-либо материальные убытки, моральный ущерб и другие негативные проявления.</p>
                <p>2.12. Продукция, предлагаемая Администрацией Пользователям, распространяется дистанционно в рамках требований, установленных действующим законодательством Российской Федерации, сертифицирована и соответствует требованиям, которые определены законодательством в сфере защиты прав потребителей.</p>

                <p class="no-margin"><b>3. Порядок использования услуг Пользователем</b></p>
                <p class="no-margin">3.1. Пользователь имеет право свободно пользоваться услугами и предложениями, изложенными на сайте в полной мере, кроме тех случаев, когда такое использование является незаконным, нарушает права, свободы и интересы Администрации и (или) других Пользователей сайта.</p>
                <p class="no-margin"><b>3.2. Порядок размещения заказа</b></p>
                <p class="no-margin">3.2.1. Пользователь самостоятельно посещает информационное поле сайта, выбирает продукт и размещает заказ.</p>
                <p class="no-margin">3.2.2. В случае необходимости, Администрация предоставляет Пользователю консультационно – информационное обслуживание по подбору продукции, в порядке, предусмотренном этим Пользовательским соглашением.</p>
                <p class="no-margin">3.2.3.  Пользователь выбирает ту продукцию, которая размещена на сайте, и Администрация не несет ответственности за последствия, в случае размещения Пользователем заказа на сторонних ресурсах. Данный пункт имеет юридическую силу и в тех случаях, когда сторонние ресурсы копируют, дублируют информацию, размещенную на сайте, включая фирменное наименование, логотип, дизайн, стиль изложения информации на сайте.</p>
                <p class="no-margin">3.2.4. Оформление заказа происходит путем заполнения формы заявки. Поля, отмеченные символом «*», обязательны к заполнению. В конце формы необходимо нажать кнопку «Заказать».</p>
                <p class="no-margin">3.2.5. Стороны достигли согласия, что на указанный номер телефона (адрес электронной почты) Пользователя, Администрация отправляет краткое информационное сообщение с деталями заказа и/или другой необходимой информацией. Пользователь, начиная пользоваться сервисом интернет-магазина http://steel-rage.101shops.ru, принимает это условие в полной мере и гарантирует, что не будет иметь каких-либо претензий относительно изложенного.</p>
                <p class="no-margin">3.2.6. После осуществления описанных выше операций, заказу Пользователя присваивается индивидуальный номер, и заказ считается размещенным, о чем выдается соответствующее уведомление. В течение некоторого времени, Администрация связывается с Пользователем, указанным в п 3.2.5. способ, для подтверждения заказа.</p>
                <p class="no-margin"><b>3.3. Порядок оплаты продукции</b></p>
                <p class="no-margin">3.3.1. Продукция оплачивается в формате 100% предоплаты или на иных условиях, достигнутых Сторонами при размещении Пользователем заказа и (или) на других этапах взаимодействия Сторон.</p>
                <p class="no-margin">3.3.4. Доставка продукции осуществляется, лишь после достижения условий, изложенных в п. 3.3.1. Пользовательского соглашения.</p>
                <p class="no-margin"><b>3.4. Порядок доставки продукции</b></p>
                <p class="no-margin">3.4.1 Доставка продукции Пользователю осуществляется собственными силами и транспортом  Администрации, либо транспортной компанией.</p>
                <p class="no-margin">3.4.2. Условия доставки продукции индивидуальны для каждого взятого в отдельности случая.</p>
                <p class="no-margin">3.4.3. Порядок и срок доставки продукции Пользователю определяется в процессе размещения заказа Пользователем.</p>
                <p class="no-margin">3.4.4. Стороны достигли согласия, что доставка продукции Пользователю осуществляется в порядке, предусмотренном Пользовательским соглашением. Самовывоз продукции Пользователем со склада возможен, при условии дополнительного согласования порядка самовывоза с Администрацией.</p>
                <p class="no-margin">3.4.5. В случае осуществления поставки продукции на условиях постоплаты, Продукция передается курьером Пользователю, лишь после оплаты Пользователем курьеру полной стоимости продукции.</p>
                <p class="no-margin"><b>3.5. Порядок возврата продукции</b></p>
                <p class="no-margin">3.5.1. Пользователь вправе отказаться от продукции в любое время до его передачи, а после передачи товара - в течение 7 дней, кроме тех случаев, когда данное право Пользователя ограничено нормами действующего законодательства Российской Федерации.</p>
                <p class="no-margin">3.5.2. Возврат продукции надлежащего качества возможен в случае, если сохранены его товарный вид, потребительские свойства, а также документ, подтверждающий факт и условия покупки указанной продукции.</p>
                <p class="no-margin">3.5.3. Пользователь не вправе отказаться от продукции надлежащего качества, имеющего индивидуально-определенные свойства, если указанная продукция может быть использована исключительно приобретающим его Пользователем.</p>
                <p>3.5.4. При отказе Пользователя от продукции, производитель продукции должен возвратить ему сумму, уплаченную Пользователем в соответствии с договором, за исключением расходов на доставку от Пользователя возвращенной продукции, не позднее чем через 10 дней с даты предъявления Пользователем соответствующего требования производителю.</p>

                <p class="no-margin"><b>4. Обязанности и ответственность сторон</b></p>
                <p class="no-margin">4.1. В случае использования результатов интеллектуальной собственности Администрации - материалов сайта, в любых целях, Пользователь обязан предварительно, перед размещением таких материалов, получить на это разрешение администрации. При наличии разрешения Администрации, Пользователь обязан отобразить полное название и доменное имя источника в следующем формате: интернет-магазин http://steel-rage.101shops.ru.  Гиперссылка должна являться активной и прямой, при нажатии на которую осуществляется переход на конкретную страницу сайта, с которой заимствован материал.</p>
                <p class="no-margin">4.2. По аналогии с инструкциями, изложенными в п. 4.1. настоящего Соглашения, Пользователь обязуется действовать, в случае использования результатов интеллектуальной собственности, что принадлежать третьим лицам. Способ и порядок осуществления уточняется в процессе переговоров с правообладателем материалов.</p>
                <p class="no-margin">4.3. Администрация не несет ответственности за действия Пользователя, которые повлекли нарушение прав третьих лиц, кроме случаев определенных действующим законодательством Российской Федерации.</p>
                <p class="no-margin">4.4. Администрация не несет ответственности за содержание информации, размещенной пользователями.</p>
                <p class="no-margin">4.5. Администрация не несет ответственности за содержание отзывов пользователей сайта. Отзывы пользователей сайта являются субъективными мнениями их авторов, никоим образом не претендующими на объективность. Они могут не совпадать с общественным мнением и не соответствовать действительности.</p>
                <p class="no-margin">4.6. Решение о выдаче/не выдаче персональных данных, принимается Администрацией, лишь на основании запроса, посланного лицом Администрации, в установленном нормами действующего законодательства порядке.</p>
                <p class="no-margin">4.7. Администрация вправе не реагировать на запросы, обращения и письма, что не содержат реквизитов обращающегося (ФИО, контактные данные).</p>
                <p class="no-margin">4.8.  Администрация не несет ответственности за регистрационные данные, что были указаны пользователем при взаимодействии с информационным полем сайта.</p>
                <p class="no-margin">4.9. Администрация имеет право, без объяснения причин ограничить, блокировать доступ Пользователя (в т.ч. незарегистрированного) на сайт, с частичным, или полным удалением информации, что была размещена Пользователем на сайте.</p>
                <p>4.10. Администрация обязуется рассмотреть претензию, оформленную в порядке предусмотренном разделом 4 соглашения, в течении 30 (тридцати) календарных дней с даты ее получения.</p>

                <p class="no-margin"><b>5. Порядок урегулирования споров</b></p>
                <p class="no-margin">5.1. В случае выявления на Сайте размещенной информации, содержащей в себе результаты интеллектуальной собственности, принадлежащие третьим лицам, правообладатель обязан:</p>
                <p class="no-margin">5.1.1. Составить претензию с указанием фактических и нормативных оснований, которые дают возможность Администрации изъять информацию из публичного доступа.</p>
                <p class="no-margin">5.1.2. Прикрепить к претензии доказательства оригинальности результата интеллектуальной собственности (оригинальный экземпляр, другие документы, подтверждающие правообладание на объект авторского права).</p>
                <p class="no-margin">5.1.3. Отправить пакет документов, упомянутых в положениях п.п. 5.1.1., 5.1.2. настоящего Соглашения, на электронный почтовый ящик администрации: poddergka.magazina@gmail.com</p>
                <p class="no-margin">5.2. Претензии Пользователей по качеству обслуживания, продукции, а так же другие замечания, следует отправлять на электронный почтовый ящик администрации: poddergka.magazina@gmail.com</p>
                <p class="no-margin">5.3. В случае описанном п. 3.2.3. Пользовательского соглашения, рекламации, претензии, замечания направляются руководству соответствующих ресурсов. Администрация вправе не реагировать на такие обращения.</p>
                <p>5.4. Администрация не обязана содействовать поиску указанных в п. 3.2.3. лиц, а так же иных третьих лиц, действиями которых были нарушены права, свободы и интересы Пользователей.</p>

                <p class="no-margin"><b>6. Прочие условия</b></p>
                <p class="no-margin">6.1. Все возможные ситуации, споры, вытекающие из взаимоотношений Пользователей, Пользователей и третьих лиц, Пользователей и администрации, не урегулированные этим соглашением, решаются в порядке, определенном нормами действующего законодательства Российской Федерации.</p>
                <p class="no-margin">6.2. Стороны по настоящему соглашению осознают объем прав и обязанностей, порожденных взаимоотношениями лиц, упомянутых этим соглашением, и в полной мере отдают отчет своим действиям, понимая юридическую природу последствий таких действий, в полной мере.</p>
                <p class="no-margin">6.3. Бездействие со стороны Администрации в случае нарушения кем-либо из Пользователей положений Соглашения, не лишает Администрацию права предпринять позднее соответствующие действия в защиту своих интересов и защиту охраняемых законом прав.</p>
                <p class="no-margin">6.4. По всем вопросам, кроме тех, которые зафиксированы в Разделе 5 Пользовательского соглашения, Пользователи могут обращаться к Администрации, путем направления соответствующих обращений.</p>
                <p class="no-margin">6.5. Контактные данные администрации:</p>
                <p class="no-margin">poddergka.magazina@gmail.com  - заказ товаров и связь с менеджерами;</p>
                <p>poddergka.magazina@gmail.com - вопросы сотрудничества, рекламы, оптовых заказов.</p>
            </div>
        </div>
    </div>
</div>


<div id="kmacb" class="kmacb__manager kmacb__manager-man3">
    <a href="#" modal="kmacb-form">
        <div class="kmacb__manager-circle"></div>
        <div class="kmacb__manager-fill"></div>
        <div class="kmacb__manager-border"></div>
        <div class="kmacb__manager-img"></div>
    </a>
</div>

<div id="kmacb-form" class="modal kmacb-form kmacb-form2">
    <div class="modal-block">
        <div class="title">Понравилось это предложение?<div class="kmacb-form-rectangle"></div></div>
        <div class="content">
            <div class="padding">
                <p>Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!</p>
                <form method="POST" action="<?= MAIN_DOMAIN ?>order.php">
                    <input type="text" name="name" value="" placeholder="Ваше имя" />
                    <input type="text" name="phone" value="" placeholder="Ваш номер телефона" />
                    <input type="submit" value="ПЕРЕЗВОНИТЬ МНЕ" />
                    <input type="hidden" name="s1" class="price_field_s1" value="1990" />
					<input type="hidden" name="callme" value="1" />
				</form>
                <p class="kmacb-form-clock">Оператор перезвонит Вам через 15-30 минут</p>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript"><!--
    //-->
</script>

  
</body>

</html> 
