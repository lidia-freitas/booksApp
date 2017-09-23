console.log('Bootstrap ' + $.fn.tooltip.Constructor.VERSION);
console.log('Bootstrap Confirmation ' + $.fn.confirmation.Constructor.VERSION);

$('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    container: 'body'
});
$('[data-toggle=confirmation-singleton]').confirmation({
    rootSelector: '[data-toggle=confirmation-singleton]',
    container: 'body'
});
$('[data-toggle=confirmation-popout]').confirmation({
    rootSelector: '[data-toggle=confirmation-popout]',
    container: 'body'
});

$('#confirmation-delegate').confirmation({
    selector: 'button'
});

var currency = '';
$('#custom-confirmation').confirmation({
    rootSelector: '#custom-confirmation',
    container: 'body',
    title: null,
    onConfirm: function (currency) {
        alert('You choosed ' + currency);
    },
    buttons: [
        {
            class: 'btn btn-danger',
            icon: 'glyphicon glyphicon-usd',
            value: 'US Dollar'
        },
        {
            class: 'btn btn-primary',
            icon: 'glyphicon glyphicon-euro',
            value: 'Euro'
        },
        {
            class: 'btn btn-warning',
            icon: 'glyphicon glyphicon-bitcoin',
            value: 'Bitcoin'
        },
        {
            class: 'btn btn-default',
            icon: 'glyphicon glyphicon-remove',
            cancel: true
        }
    ]
});