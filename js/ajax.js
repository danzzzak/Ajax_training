$('select').on('change', function () {
    let key = $(this).attr('name');
    let value = $(this).val();


    $.ajax({
        type: 'get',
        data: key + '=' + value,
        url: 'actions/query.php',
        success: function (res) {
            console.log('succ');
            console.log(res);
            $('.cards-block').html(res); // помещаем рез в кардс-блок
            },
        error: function () {
            console.log('err');
            },
    });

});