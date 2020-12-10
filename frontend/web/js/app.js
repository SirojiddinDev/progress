$('.fa-heart').on('click', function (){
   var url = $(this).attr('data-url');
   var id = $(this).attr('data-id');
   $.ajax({
       url:url,
       type:'post',
       data:{id:id},
       dataType:'json',
       success:function (data){
           alert('salom')
       }

   })
});

$('.fa-shopping-cart').on('click', function (){
    var url = $(this).attr('data-url');
    var id = $(this).attr('data-id');
    $.ajax({
        url:url,
        type:'post',
        data:{id:id},
        dataType:'json',
        success:function (data){
           alert('salom')

        }

    })
});