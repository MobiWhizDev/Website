$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

// $(document).ready(function(e) {
// $('#hoverelement').hover(function(){
//    $main_text=$(this).text();
//    $(this).text("It all starts with a strategic vision. We understand your core business and your customers. From there we work to develop a sound strategy, the key factor to any successful project.");
//  },function(){
//    $(this).text($main_text);
//    });
// });

// $(document).ready(function(e) {
// $('#hoverelement2').hover(function(){
//    $main_text=$(this).text();
//    $(this).text("");
//  },function(){
//    $(this).text($main_text);
//    });
// });


// $(document).ready(function(e) {
// $('#hoverelement3').hover(function(){
//    $main_text=$(this).text();
//    $(this).text("");
//  },function(){
//    $(this).text($main_text);
//    });
// });

// $(document).ready(function(e) {
//  $('#hoverelement4').hover(function(){
//    $main_text=$(this).text();
//    $(this).text("");
//  },function(){
//    $(this).text($main_text);
//  })
// });

function myFunction() {
    // document.getElementById("wrapper").style.marginTop = "30px";
}

// document.onreadystatechange = function () {
//   var state = document.readyState
//   if (state == 'interactive') {
//        document.getElementById('container-outer').style.visibility="hidden";
//   } else if (state == 'complete') {
//       setTimeout(function(){
//          document.getElementById('interactive');
//          document.getElementById('load').style.visibility="hidden";
//          document.getElementById('container-outer').style.visibility="visible";
//       },1000);
//   }
// }

$(function() {
    $('#modaltrigger').leanModal();
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



/*--- footer contact form country dropdown ---*/
 function setCountry(code){
        if(code || code==''){
            var text = jQuery('a[cunt_code="'+code+'"]').html();
            $(".dropdown dt a span").html(text);
        }
    }
    $(document).ready(function() {
        $(".dropdown img.flag").addClass("flagvisibility");

        $(".dropdown dt a").click(function() {
            $(".dropdown dd ul").toggle();
        });

        $(".dropdown dd ul li a").click(function() {
            //console.log($(this).html())
            var text = $(this).html();
            $(".dropdown dt a span").html(text);
            $(".dropdown dd ul").hide();
            $("#result").html("Selected value is: " + getSelectedValue("country-select"));
        });

        function getSelectedValue(id) {
            //console.log(id,$("#" + id).find("dt a span.value").html())
            return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (! $clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });


        $("#flagSwitcher").click(function() {
            $(".dropdown img.flag").toggleClass("flagvisibility");
        });
    });
	