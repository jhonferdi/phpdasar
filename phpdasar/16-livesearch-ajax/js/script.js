// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var buttonSearch = document.getElementById('button-search');
var container = document.getElementById('container');

//tambahkan event keryword diketik
keyword.addEventListener('keyup', function() {
    //buat object jax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                container.innerHTML = xhr.responseText;
            }
        }
        //eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();

});