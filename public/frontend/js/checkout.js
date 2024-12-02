$(document).ready(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').padStart('content')
        }
    });
    $('.razorpay_pay_btn').click(function(e){
        e.preventDefault();

        var data={
            'token':$('input[name=_token]').val(),
                'firstname':$('input[name=firstname]').val(),
                'lastname':$('input[name=lastname]').val(),
                'phone':$('input[name=phone]').val(),
                'email':$('input[name=email]').val(),
               
                'state':$('input[name=state]').val(),
                'pincode':$('input[name=pincode]').val(),
                'country':$('input[name=country]').val(),
                'address':$('input[name=address]').val(),
                'state':$('input[name=state]').val()
        }
        $.ajax({
            type:"post",
            url:'/confirm-razorpay-payment',
            data:data,
            
            success:function(response){

            }
        });
    });
});