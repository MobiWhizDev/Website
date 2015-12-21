$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(".approach-icons").on('click', function(e) {
    $type = $(this).data('approachtype');
    $('.approach-icons').removeClass('active');
    $(this).addClass('active');

    $('.icon-detail .desc').removeClass('active');
    $('#desc' + $type).addClass('active');

    $('.img-apporach').removeClass('active');
    $('#img-approach' + $type).addClass('active');

});

$(function() {
    $('#modaltrigger').leanModal();
});

function formSubmit() {


    $data = {
        name: $("#fullname").val(),
        email: $("#email").val(),
        phone: $("#phone").val() + ' ' + $("#phone2").val(),
        qrytype: $("#qrytype").val(),
        comments: $("#comments").val()
    };
    return $("#dialog_submit").html("<img src='images/loading.gif' />"), $("#modaltrigger").click(), $.post("rest.php", $data, function(t) {
        $.post("mail.php", $data);
        /* <![CDATA[ */
        var google_conversion_id = 937585185;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "bXf1CPLPyGIQodSJvwM";
        var google_conversion_value = 10.00;
        var google_conversion_currency = "USD";
        var google_remarketing_only = false;
        /* ]]> */

        t = $.trim(t), $("#dialog_submit").html("-1" == t || "" == t ? "Error while connecting to server" : "Your message has been successfully submitted!"), $("#modaltrigger").click()
    }), !1
}



$(".phone").intlTelInput({
    /*allowExtensions: true,
    autoFormat: true,
    autoHideDialCode: false,
    autoPlaceholder: true,*/
    // dropdownContainer: $("body"),
    // excludeCountries: ["us"],
    geoIpLookup: function(callback) {
        $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            callback(countryCode);
        });
    },
    initialCountry: "auto",
    //nationalMode: true,
    // numberType: "MOBILE",
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    preferredCountries: ['sa', 'ae', 'kw', 'bh', 'au'],
    //        utilsScript: "js/utils.js"
});



$.validator.setDefaults({
    submitHandler: function() {
        formSubmit();
    }
});

$().ready(function() {

    // validate signup form on keyup and submit
    $("#contactform").validate({
        rules: {
            firstname: "required",
            username: {
                required: true,
                minlength: 2
            },

        },

    });

    $("#contactform2").validate({
        rules: {
            firstname: "required",
            username: {
                required: true,
                minlength: 2
            },

        },

    });


});
