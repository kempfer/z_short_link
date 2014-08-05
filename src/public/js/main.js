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
    });

    // start enter link

    $('#long_link').on("keypress", function () {
        if($('#main-group').hasClass('has-error')){
            $('#main-group').removeClass('has-error');
        }
    });

});

function createShortUrl (longLink) {
    $.ajax({
        url: ''
    });
}

