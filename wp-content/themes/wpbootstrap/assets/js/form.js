$(function () {
    /*
     FORM . JS
     by Lorenz Kromer
     lorenz.kromer@gmail.com
     */

    function checkEmptyFields(form) {
        var noEmpty = true;
        $.each($(form).find('input:required'), function () {
            if ($(this).val() == '') {
                noEmpty = false;
                $(this).addClass('error');
                var alert = $('.alert-form');
                alert.show();
                alert.find('.alert').addClass('alert-warning').html('<strong>Achtung !</strong> Bitte füllen Sie alle rot markierten Felder aus.');
            }
        });
        $.each($(form).find('textarea:required'), function () {
            if ($(this).val() == '') {
                noEmpty = false;
                $(this).addClass('error');
                var alert = $('.alert-form');
                alert.show();
                alert.find('.alert').addClass('alert-warning').html('<strong>Achtung !</strong> Bitte füllen Sie alle rot markierten Felder aus.');
            }
        });
        return noEmpty;
    }

    $('form').on('submit', function (e) {
        e.preventDefault();
        var self = $(this);

        if (checkEmptyFields(self)) {
            $.ajax({
                url: $(self).attr('action'),
                method: $(self).attr('method'),
                data: $(self).serialize()
            }).done(function (response) {
                data = JSON.parse(response);
                var alert = $('.alert-form');
                alert.show();
                if (typeof data.warning != 'undefined') {
                    alert.find('.alert').removeClass().addClass('alert alert-warning').html(data.warning);
                }
                if (typeof data.error != 'undefined') {
                    alert.find('.alert').removeClass().addClass('alert alert-error').html(data.error);
                }
                if (typeof data.success != 'undefined') {
                    alert.find('.alert').removeClass().addClass('alert alert-success').html(data.success);
                    $('.btn-form-submit').hide();

                    $.each($(self).find('input:required'), function () {
                        $(this).removeClass('error');
                    });
                    $.each($(self).find('textarea:required'), function () {
                        $(this).removeClass('error');
                    });
                }
            });
        }
    });
});