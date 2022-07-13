$(document).ready(function() {
    //hide button search
    $('#button-search').hide();

    //event ketika keyword diketik
    $('#keyword').on('keyup', function() {
        //munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});