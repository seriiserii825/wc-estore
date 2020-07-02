jQuery(function ($) {
	$('.search_form input[name="s"]').on('keyup', function () {
		let value = $(this).val();
		if (value.length < 2) {
			return false;
		}
		let data = {
			s: value,
			action: 'myaction',
			nonce: search_form.nonce

		};
		jQuery.ajax({
			type: 'POST',
			url: search_form.url,
			data: data,
			dataType: 'html',
			success: function (data) {
				$('.search_form .search-result').html(data);
			}
		});

	});
});
