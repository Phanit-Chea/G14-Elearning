
$(document).ready(function(){
    $('#search').keyup(function(){
        let search_text=$(this).val();
        
            $.ajax({
                url:'/add_search_category',
                method:'get',
                data:{query:search_text},
                success: function(response){
                    $('#search_category').html(response);
                }

            })
        
        
    })
});