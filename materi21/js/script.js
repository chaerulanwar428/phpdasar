$(document).ready(function () {
  //hilangkan tombol cari
  $('#tombol-cari').hide();

  //event ketika keyword ditulis
  $('#keyword').on('keyup', function () {
    //munculkan icon loading
    $('.loader').show();

    //ajax menggunakan load
    $('container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
  });
});

// //ambil elemen-elemen yang dibutuhkan
// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('tombol-cari');
// var container = document.getElementById('container');

// //buat object ajax
// var xhr = new XMLHttpRequest();

// //tambahkan event ketika keyword ditulis
// keyword.addEventListener('keyup', function () {
//   //buat kesiapan ajax
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   //eksukusi ajax
//   xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
//   xhr.send();
// });
