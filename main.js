$('form.ajax').on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		method = that.attr('method'),
		data = {};
	
	that.find('[name]').each(function(index, value) {
		var that = $(this),
			name = that.attr('name'),
			value = that.val();

		data[name] = value;
	});
	
	$.ajax({
		url: url,
		type: method,
		data: data,
		success: function(response) {
			$('form.ajax').toggle("slow");
			$('form')[0].reset();
			$('div.responses')
				.replaceWith("<div class='responses'>"+response+"</div>");
		}
	});
	return false;
});

$('.edit-form').click(function(e) {
	e.preventDefault();
	$('form.ajax').toggle("slow");
});