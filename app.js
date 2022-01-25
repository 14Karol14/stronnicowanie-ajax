$(document).ready(function(){  
    load_data();  
    function load_data(page)  
    {  
        $.ajax({  
                url:"stronnicowanie.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                    $('#dane_stronnicowane').html(data);  
                }  
        })  
    }  
    $(document).on('click', '.strona', function(){  
        let page = $(this).attr("id");  
        load_data(page);  
    });  
});