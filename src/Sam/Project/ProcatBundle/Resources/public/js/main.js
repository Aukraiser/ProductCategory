$('document').ready(function(){
    $('.likes').click(function(){
        var id = $(this).attr('id');
        $.ajax({
             type: 'get',
             url: 'http://localhost/productcategory/web/app_dev.php/product/'+id+'/like',
             beforeSend: function(){
                 console.log('ça charge');
             },
             success: function(data) {
                 console.log(data.likes);
                 $('#'+id).text(data.likes);
             }
        });
    })
});