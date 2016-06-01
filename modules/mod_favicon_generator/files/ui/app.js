function urldecode(str) {
    return decodeURIComponent((str+'').replace(/\+/g, '%20'));
}

$(document).ready(function(){
    $('#file_select', '#step1').removeAttr('disabled').click(function(e){
        $('#file_input').trigger('click');
    });
    $('#file_input').change(function(e){
        var f = e.originalEvent.target.files[0];
        $('#file_holder').addClass('filled').html(f.name);
        $('#submit_btn').fadeIn(300).animate({
            left: '0px'
        }, 300);
    });
    $('#submit_btn', '#step1').removeAttr('disabled').click(function(){
        $('iframe')[0].onload = function(){
            var res = jQuery.parseJSON(this.contentWindow.document.body.innerHTML)
            //console.log('upload done');

            if (res.rcode == 'OK') {
                $('#demo_favicon_wrap', '#step2').empty().append(
                    $('<img />').attr('src', res.test_url)
                    .width(16).height(16)
                    );
                $('#download_btn').attr('href', res.dl_url);
                $('#submit_btn', '#step1').html('completed.');
                $('#code_box').val(urldecode(res.meta_code)).nextAll('a').attr('href', res.link);

                $('#step2').animate({
                    top: '0px'
                }, 350);
                setTimeout(function() {
                    $('#step3').animate({
                        top: '0px'
                    }, 325);
                }, 225);
                setTimeout(function() {
                    $('#step4').animate({
                        top: '0px'
                    }, 300);
                }, 400);
            } else { // was an error!
                var error_msg = 'Uh oh... Something went wrong! ';
                if (res.rcode == 'ER')
                    error_msg += res.error_text;
                else
                    error_msg += 'Please check that the image you selected is a valid image and try again.';
                alert(error_msg);
                $('#submit_btn', '#step1').removeAttr('disabled').html('Create').removeClass('disabled');
                $('#file_select', '#step1').removeAttr('disabled');    
            }
        };
        $('form')[0].submit();
        //console.log('upload started');
        
        // do something to indicate loading
        $(this).attr('disabled', 'disabled').addClass('disabled').html('creating...');
        $('#file_select', '#step1').attr('disabled', 'disabled');
        return false;
    });
    $('#startover').click(function(){
        $('#file_holder').removeClass('filled').html(' (none selected) ');
        $('#submit_btn', '#step1').removeAttr('disabled').html('Create').removeClass('disabled').hide();
        $('#file_select', '#step1').removeAttr('disabled');

        $('#step4').animate({
            top: '-999px'
        }, 250);
        setTimeout(function() {
            $('#step3').animate({
                top: '-999px'
            }, 225);
        }, 175);
        setTimeout(function() {
            $('#step2').animate({
                top: '-999px'
            }, 200);
        }, 325);
    });
});