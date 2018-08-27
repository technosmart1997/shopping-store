$(document).ready(function(){
    cat();
    brand();
    product();
    function cat()
    {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {category : true},
            success : function(data){
            $('#cat_section').html(data);
        }
        });
    }
    function brand()
    {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {brand : true},
            success : function(data){
            $('#brand_section').html(data);
        }
        });
    }
      function product()
    {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {product : true},
            success : function(data){
            $('#product_section').html(data);
        }
        });
    }
    
    $(document).on('click','.category',function(event){
        event.preventDefault();
        var cid = $(this).attr('cid');
        
         $.ajax({
            url : "action.php",
            method : "POST",
            data : {sel_cat : true , cid : cid},
            success : function(data){
            $('#product_section').html(data);
        }
        });
    });
    
    $(document).on('click','.brand',function(event){
        event.preventDefault();
        var bid = $(this).attr('bid');
        
         $.ajax({
            url : "action.php",
            method : "POST",
            data : {sel_brand : true , bid : bid},
            success : function(data){
            $('#product_section').html(data);
        }
        });
    });
    
    $('#search_btn').click(function(){
        var d = $('#search').val();
        if(d!='')
            {
         $.ajax({
            url : "action.php",
            method : "POST",
            data : {search: true , d : d},
            success : function(data){
            $('#product_section').html(data);
        }
            });
            }
});
    $('#signup_btn').click(function(event){
       event.preventDefault(),
       
           $.ajax({
             url : 'register.php',
             method : 'POST',
             data : $('form').serialize(),
             success : function(data)
           {
               $('#signup_msg').html(data);
           }
          });
    });
    
   $(document).on('click','#product_add',function(event){
        event.preventDefault();
        get_count();
        var pid=$(this).attr('pid');
           $.ajax({
             url : 'action.php',
             method : 'POST',
             data : {addproduct : true , pid :pid},
            success : function(data){
                $('#item_add_msg').html(data);
            }   
    });
});
    
    $('#my_cart').click(function(event){
        event.preventDefault();
        
        window.location.href = "cart.php";
    });
    
    function get_count()
    {
        $.ajax({
           url : "test.php",
           method : "POST",
           data : {pro_count : true},
           success : function(data){
               $('.badge').html(data);
           }
            
        });
    }
    
    user_cart();
    function user_cart()
    {
        $.ajax({
            url : "test.php",
            method : "POST",
            data : {user_cart_content : 1},
            success : function(data){
                $('#user_cart').html(data);
            }
        });
    }
    function quantity_update()
    {
        $.ajax({
            url : "test.php",
            method : "POST",
            data : {update_qty : 1},
            success : function(data){
                $('#user_cart').html(data);
            }
        });
    }
    
 $(document).on('keyup','.qty',function(event){
     event.preventDefault();
    var pid=$(this).attr('pid');
    var qty=$(this).val();
     var price=$('#price-'+pid).val();
     var total=qty * price;
     
    $('#total-'+pid).val(total);
    });
    
    
    $('.remove').click(function(event){
        event.preventDefault();
    }); 
    
    function remove_update(pid)
    {
        $.ajax({
            url : "test.php",
            method : "POST",
            data : {remove_update : 1, pid : pid},
            success : function(data)
            {
                $('#user_cart').html(data);
            }
        });
    }
    
   $(document).on('click','.remove',function(event){
       var rid=$(this).attr('remove_id');
        remove_update(rid);
    });
    
    
    $(document).on('click','.update',function(event){
        event.preventDefault();
        
        var pid = $(this).attr('update_id');
        var qty = $('#qty-'+pid).val();
        var total= $('#total-'+pid).val();

        
        $.ajax({
            url : "test.php",
            method : "POST",
            data : {to_update : 1,upid : pid , qty : qty, total : total},
            success : function(data)
            {
                $('#update_msg').html(data);
              quantity_update();
            }
        });
    });
}); 