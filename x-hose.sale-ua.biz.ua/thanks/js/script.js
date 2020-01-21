$(document).ready(function(){
	$('#countdown_dashboard').countDown({
		targetOffset: {
			'day':      0,
			'month':    0,
			'year':     0,
			'hour':     0,
			'min':      5,
			'sec':      0
		},
		omitWeeks: true
    });
	
	$('.fancybox').fancybox();

	$('.order-button').click(function(event){
		event.preventDefault();
		
		var order_id = $(this).attr('data-order_id');
		if($(this).hasClass('main_product')){
			$.ajax({
				method: "POST",
				url: "/thanks/add_to_order.php",
				data: {order_id: order_id, main_product: 1}
			})
			.done(function() {
				alert('Спасибо! Ваш заказ обновлен.');
			});
		}else if($(this).hasClass('order_set')){
			$.ajax({
				method: "POST",
				url: "/thanks/add_to_order.php",
				data: {order_id: order_id, order_set: 1}
			})
			.done(function() {
				alert('Спасибо! Ваш заказ обновлен.');
			});
		}else{			
			var product_id = $(this).attr('data-product_id');

			$.ajax({
				method: "POST",
				url: "/thanks/add_to_order.php",
				data: {order_id: order_id, product_id: product_id}
			})
			.done(function() {
				alert('Спасибо! Ваш заказ обновлен.');
			});
		}
	})
});