$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(function() {
    $('#modaltrigger').leanModal();
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

function formSubmit() {

    $data = {
        name: $("#fullname").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
        qrytype: $("#qrytype").val(),
        comments: $("#comments").val()
    };
    return $("#dialog_submit").html("<img src='images/loading.gif' />"), $("#modaltrigger").click(), $.post("rest.php", $data, function(t) {
        $.post("mail.php", $data)
        t = $.trim(t), $("#dialog_submit").html("-1" == t || "" == t ? "Error while connecting to server" : "Your message has been successfully submitted!"), $("#modaltrigger").click()
    }), !1
}
