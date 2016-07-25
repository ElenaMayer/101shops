$(document).ready(function() {
$('a[href*=#]').bind("click", function(e){
var anchor = $(this);
var name = anchor.attr('href').replace(new RegExp("#",'gi'), '');
$('html, body').stop().animate({
scrollTop: $('div[name='+name+']').offset().top
}, 700);
e.preventDefault();
return false;
});
});
