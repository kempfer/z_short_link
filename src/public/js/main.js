/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    // click button
    $('#button_create_link').on( "click", function (e) {
        var longUrl = $.trim($('#long_link').val());
        if(longUrl == ''){
            $('#main-group').addClass('has-error');
        }
        else {
            createShortUrl(longUrl);
        }
    });

    // start enter link

    $('#long_link').on("keypress", function () {
        if($('#main-group').hasClass('has-error')){
            $('#main-group').removeClass('has-error');
        }
    });

});

function createShortUrl (longLink) {
    $('#long_link').attr('disabled','disabled');
    $('#button_create_link').attr('disabled','disabled');
    $.ajax({
        url: '/link',
        type : 'post',
        data : {long_link : longLink},
        success : function (response) {
            $('#long_link').removeAttr('disabled');
            $('#button_create_link').removeAttr('disabled');
            if(response.query === true){
                $('#response').html(response.data['short']);
                $('#response').show();
                $('#response').select()
                console.log(response.data['short']);
            }
        }
    });
}

