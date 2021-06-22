
$('#btn_save').on('click', function () {

    tinyMCE.triggerSave();
    var baihoc_id = $('#baihoc_id').val();
    var de_bai = $('#de_bai').val();
    var huong_dan_giai = $('#huong_dan_giai').val();
    var so_thu_tu = $('#so_thu_tu').val();

    var frm_data = { 'baihoc_id': baihoc_id, 'de_bai': de_bai, 'huong_dan_giai': huong_dan_giai, 'so_thu_tu': so_thu_tu};

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: base_url + 'save_excercise',
        data: frm_data,
        success: function (res) {
            var rs = JSON.parse(res);
            if (rs['status']) {
                $("#msg").fadeTo(2000, 500).slideUp(500, function () {
                    $("#msg").slideUp(1000);
                });
            }
        }
    });
});
