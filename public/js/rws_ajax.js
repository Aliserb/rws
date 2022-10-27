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
                    console.log('Ошибка');
                },                 
                beforeSend: function() {                     
                    console.log('Загрузка')               
                },                 
                success: function(){    
                    console.log('успешно');           
                }  
            });
        });
    });
});