var scrollPosDetect = function() {
	if ($(window).scrollTop() >= 10) {
		$(".navbar").addClass("active");
		$(".navbar-brand img").attr('src', imgUrl+'logo__.png');
	} else {
		$(".navbar").removeClass("active");
		$(".navbar-brand img").attr('src', imgUrl+'logo_white.png');
	}
};

scrollPosDetect();

$(window).scroll(scrollPosDetect);
$(window).resize(scrollPosDetect);


function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ))
  return matches ? decodeURIComponent(matches[1]) : undefined
}

function lastpack(last) {
  var lastclass = $('.balance');
  if (last > 4) {
    document.cookie = "lastpack="+last;
    lastclass.html(last);
    last--;
    setTimeout(lastpack, 45000, last);
  } else {
    lastclass.html(last);
  }
}


$(document).ready(function() {
    $('[name="country"]').on('change', function() {
        var geoKey = $(this).find('option:selected').val();
        var data = $jsonData.prices[geoKey];
        var price = data.price;
        var oldPrice = data.old_price;
        var delivery_price = data.delivery_price;
        var currency = data.currency
        $("[value = "+geoKey+"]").attr("selected", true).siblings().attr('selected', false);

        $('.price_land_s1').text(price);
        $('.price_land_s2').text(oldPrice);
        $('.price_land_s3').text(delivery_price);
        $('.price_land_curr').text(currency);
        if(geoKey == '357') { $('body').addClass('bel'); }
    });


    $('.swipebox').swipebox();

    var lastpackcookie = getCookie("lastpack");
	if(lastpackcookie == undefined){
	    document.cookie = "lastpack=14";
	    lastpack(14);
	} else {
	    lastpack(lastpackcookie);
	} 

	$('nav ul.nav a, #btn_1, #btn_2').click(function(){
	    $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 2000);
	    return false;
	    var cl = $(this).attr('class');
	    $('#ancor'+cl)
	});
}); 

