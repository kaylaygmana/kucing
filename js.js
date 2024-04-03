document.addEventListener('DOMContentLoaded', function() {
  var myCarousel = document.getElementById('carouselExampleFade');
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 1000, // Ganti dengan nilai interval yang sesuai
    pause: 'hover', 
    wrap: true  
  });

  function tampilkanSekret() {
    var popupText = document.getElementById('popupText');
    var closeButton = document.getElementById('closeButton');

    if (popupText.style.display === 'none') {
        popupText.style.display = 'block';
        closeButton.style.display = 'inline-block'; // Show the close button
    } else {
        popupText.style.display = 'none';
        closeButton.style.display = 'none'; // Hide the close button
    }
  }

  document.getElementById('popupTrigger').addEventListener('click', function() {
    tampilkanSekret();    
  });

  document.getElementById('closeButton').addEventListener('click', function() {
    tampilkanSekret();    
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var kegiatanDropdown = document.getElementById('kegiatan');
  var tanggalTerpilihInput = document.getElementById('tanggal_terpilih');
  var kalenderTanggals = document.querySelectorAll('.kalender-tanggal');

  kegiatanDropdown.addEventListener('change', function() {
      var selectedOption = this.value;

      if (selectedOption === 'Posyandu Rutin') {
          var tanggalTerpilih = tanggalTerpilihInput.value;
          if (tanggalTerpilih) {
              var tanggalPilihan = new Date(tanggalTerpilih);
              var tanggal = tanggalPilihan.getDate();
              var bulan = tanggalPilihan.getMonth() + 1;
              var tahun = tanggalPilihan.getFullYear();

              var tanggalKalender = document.querySelector('.kalender-tanggal[data-tanggal="' + tanggal + '"][data-bulan="' + bulan + '"][data-tahun="' + tahun + '"]');
              tanggalKalender.classList.add('posyandu-rutin');
          }
      } else {
          kalenderTanggals.forEach(function(tanggalKalender) {
              tanggalKalender.classList.remove('posyandu-rutin');
          });
      }
  });
});





