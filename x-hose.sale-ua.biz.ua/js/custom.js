$(document).ready(function(){
	$(function(){
	
		$('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
	});
		//scroll
	    $('#menu_main a').bind('click.smoothscroll',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);
      
      if($('#menu').hasClass('fixed')) { 
        var mtop = $target.offset().top;
      } else { 
        var mtop = $target.offset().top;
      }
      
      $('html, body').stop().animate({
        'scrollTop': mtop
      }, 900, 'swing');
    });
	
	/*var mailForm = $('#zakaz');	

		mailForm.submit(function(e){
      jsclient_name = $('#name').attr("value");
      jsclient_phone = $('#phone').attr("value");
      jsclient_city = $('#city').attr("value");
      jsclient_amount = $('#length').attr("value");
	  jsclient_comment = $('#comment').attr("value");
      var urls = mailForm.attr('action');
      $.ajax({
        type : 'post',
        url : urls,
        data : {
          client_name: jsclient_name,
          client_phone: jsclient_phone, 
          client_city: jsclient_city, 
          client_amout: jsclient_amount,
		  client_comment:jsclient_comment
        },
        success: function(data){
          mailForm.html('<p id = "sucess">Спасибо!<br/>Мы Вам<br/>скоро перезвоним!</p>');
        },
        error: function(){
          mailForm.html('<p id = "sucess">Извините!<br/>не получилось</p>');
        }
      });
      e.preventDefault();
		});*/
	
	$("#phone").mask("+38 (999) 999-99-99");
	
	var menu = $('#menu');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        menu.addClass('fixed');
      } else {
        menu.removeClass('fixed');
      }
    });
	
});