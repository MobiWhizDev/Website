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

function formSubmit(form) {

    formData = form.serializeArray();

    $data = {
        name: formData[0].value,
        email: formData[1].value,
        phone: formData[2].value + ' ' + formData[3].value,
        qrytype: formData[4].value,
        comments: formData[5].value
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

        t = $.trim(t), $("#dialog_submit").html("-1" == t || "" == t ? "Error while connecting to server" : "Thank you for your inquiry. Your details have been forwarded to one of our app wizards who will get in touch with you shortly.<br/><br/> <p>Ph: +1-267-933-0030 | Email: info@mobiwhiz.com</p>"), $("#modaltrigger").click();

        return false;
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
    submitHandler: function(form) {

        formSubmit($(form));
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








$(window).bind('scroll', function(){
    if($(this).scrollTop() > 500) {
        $(".sideMenu").show();
    }
	if($(this).scrollTop() < 500) {
        $(".sideMenu").hide();
    }
});
$(document).ready(function(){        
    $(".sideMenu").hide();
});
