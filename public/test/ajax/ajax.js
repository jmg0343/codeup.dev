

var $orders = $('#orders');
var $name = $("#name");
var $drink = $("#drink");

$.ajax({
	type: 'GET',
	url: '/test/ajax/api/orders.json',
	success: function(orders) {
		// console.log(orders);
		$.each(orders, function(index, order){ 
			$orders.append('<li class="well">name: ' + order.name +'<br>' + 'drink: ' + order.drink + '</li>');
		});
	},
	error: function() {
		alert('error loading orders');
	}	
});

$("#add-order").on('click', function() {

	var order = {
		name: $name.val(),
		drink: $drink.val(),
	};

	$.ajax({
		type: 'POST',
		url: '/test/ajax/api/orders.json',
		data: order, 
		success: function (newOrder) {
			$orders.append('<li class="well">name: ' + newOrder.name +'<br>' + 'drink: ' + newOrder.drink + '</li>');
		},
		error: function() {
			alert('error saving order');
		}
	});

});


// IMPORTANT LESSONS

	// json files will not work with comments 
	// .each acts as foreach loop.....each orders as order ^
	// success and append functions 
