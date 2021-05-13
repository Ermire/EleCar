require('./bootstrap');

require('alpinejs');

$('#ref_form').validate({
    onkeyup: false,
    errorClass: 'error',
    validClass: 'valid',
    rules: {
        'debutLocation': { required: true },
        'finLocation': { required: true },
        'assurance'
    }
})