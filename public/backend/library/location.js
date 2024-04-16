(function($) {
    "use strict"
    var HT = {};
    var document = $(document)

    HT.location = () => [
        $('.location').on('change', function() {
            let options = {
                'data': {
                    'location_id' : $(this).val()
                },
                'target': $(this).attr('data-target')
            }
            HT.sendDataToGetLocation(options);
        }),
    ];
    HT.sendDataToGetLocation = (options) => {
        $.ajax({
            url: 'ajax/location/getLocation',
            type: 'GET',
            data: options,
            dataType: 'json',
            success: function(res) {
                $('.' + options.target).html(res.html)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Lỗi ' + textStatus + ' ' + errorThrown);
            }
        })
    } 
    document.ready(function() {
        HT.location();
    })
})(jQuery);