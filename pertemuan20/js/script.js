$(document).ready(function() {

    // Hilangkan tombol cari
    $('#tombol-cari').hide();

    // Event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        $('.loader').show();

        // Ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // Ajax menggunakan $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});