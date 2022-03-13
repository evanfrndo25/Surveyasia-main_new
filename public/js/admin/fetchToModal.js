$(document).ready(function() {
    $('.btn-detail').on('click', function () {
        let id = $(this).data('id');
        let NIK = $(this).data('nik');
        let nama = $(this).data('nama');
        let kelamin = $(this).data('gender');
        let tempat_lahir = $(this).data('tempat-lahir');
        let tanggal_lahir = $(this).data('tanggal-lahir');
        
        $('#id_user').val(id);
        $('#NIK').val(NIK);
        $('#nama').val(nama);
        $('#tempat-lahir').val(tempat_lahir);
        $('#tanggal-lahir').val(tanggal_lahir);
        if (kelamin === "L") $('#jenis-kelamin').val("Laki-laki");
        else $('#jenis-kelamin').val("Perempuan");
        console.log(NIK);

        
        $('.btn-tolak').on('click', function () {
            $('#id-penolakan').val(id);
        })
    })

})