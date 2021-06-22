$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#btnsb').click(function(e){
        e.preventDefault();
        // var _token = $("input[name='_token']").val();
        var email = $("#emaillg").val();
        var password = $("#password").val();
        var retype_password = $("#retupe_password").val();

        $.ajax({
            url: $('#formADD').attr('action'),
            type: $('#formADD').attr('method'),
            data:{
                // _token:_token,
                email:email,
                password:password,
                retyep_password:retype_password
            },
            success: function(data){
                printMsg(data);
            }
        });
    });
    function printMsg(msg){
        if($.isEmptyObject(msg.error)){
            console.log(msg.success);
            $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
        }else{
            $.each(msg.error, function(key, val){
                $('.'+key+'Err').text(val);
            });
        }
    }
});