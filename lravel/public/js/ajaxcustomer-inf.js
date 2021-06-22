$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#btnsubmit').click(function(e){
        e.preventDefault();
        // var _token = $("input[name='_token']").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var password_confirmation = $("#password_confirmation").val();
        var birth = $("#birth").val();
        var address = $("#address").val();
        var gender = $("#gender").val();

        $.ajax({
            url: $('#formMD').attr('action'),
            type: $('#formMD').attr('method'),
            data:{
                // _token:_token,
                name:name,
                email:email,
                password:password,
                password_confirmation:password_confirmation,
                birth:birth,
                address:address,
                gender:gender
            },
            success: function(data){
                printMsg(data);
            }
        });
    });
    function printMsg(msg){
        if($.isEmptyObject(msg.error)){
            window.location.href = "http://localhost/lravel/login";
            console.log('msg.success');
            $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
        }else{
            $.each(msg.error, function(key, val){
                $('.'+key+'Err').text(val);
            });
        }
    }
});