(function($) {
    "use strict"
    var HT = {};
    var document = $(document)

    HT.location = () => [
        $('.provinces').on('change', function() {
            let province_id = $(this).val();
            $.ajax({
                url: 'ajax/location/getLocation',
                type: 'GET',
                data: {
                    'province_id': province_id
                },
                dataType: 'json',
                success: function(res) {
                    $('.districts').html(res.html)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Lỗi ' + textStatus + ' ' + errorThrown);
                }
            })
        }),
        $('.districts').on('change', function() {
            let district_id = $(this).val();
            $.ajax({
                url: 'ajax/location/getLocation',
                type: 'GET',
                data: {
                    'district_id': district_id
                },
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $('.wards').html(res.html)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Lỗi ' + textStatus + ' ' + errorThrown);
                }
            })
        }),
    ]

    document.ready(function() {
        HT.location();
    })
})(jQuery);