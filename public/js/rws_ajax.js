jQuery( function( $ ){
    $(document).ready(function(){
        var filter = $('.rws_form');

        $('.rws_form').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "../public/rws_ajax.php",
                type: "POST",
                data: filter.serialize(),
                error:function(){
                    $('.rws_form_error').addClass('active');
                    $('.rws_form_loading').removeClass('active');
                    $('.rws_form_success').removeClass('active');
                },                 
                beforeSend: function() {                     
                    $('.rws_form_loading').addClass('active');
                    $('.rws_form_error').removeClass('active');
                    $('.rws_form_success').removeClass('active');
                },                 
                success: function(){    
                    $('.rws_form_success').addClass('active');    
                    $('.rws_form_loading').removeClass('active');
                    $('.rws_form_error').removeClass('active');     
                }  
            });
        });
    });
});