$(function() {
/*
	FORM . JS 
	by Lorenz Kromer
	lorenz.kromer@gmail.com
	*/

	function checkEmptyFields(form){
		var noEmpty = true;
		$.each($(form).find('input:required'), function () {
			if($(this).val() == '') {
				noEmpty = false;
				$(this).addClass('error');
			}
		});
		return noEmpty;
	}

	$('form').on('submit', function(e){
		e.preventDefault();
		var self = $(this);

		if(checkEmptyFields(self)){
			$.ajax({
				url: $(self).attr('action'),
				method: $(self).attr('method'),
				data: $(self).serialize()
			})
			.done(function(response){
				console.log(JSON.parse(response));
			});
		}
	});
});