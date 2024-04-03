<?php
session_start(); // Memulai session

$is_admin = false; // Set default $is_admin ke false
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
    $is_admin = true;
}

if (!isset($_SESSION['sudah_login'])) {
  // Jika pengguna belum login, tidak ada tindakan yang dilakukan
} else {
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js.js"></script>
    <style>


          .darken-background {
              position: relative;
              background-image: url('bg-img/bggede.jpg');
              background-size: cover;
              background-position: center;
              width: 100%;
              height: 590px;
              overflow: hidden;
              display: flex;
              justify-content: center;
              align-items: center; 
              flex-direction: column;

          }

          .darken-background h1,
          .darken-background h3 {
              text-align: center;
              color: white; 
              opacity: 0.9; 
              font-family: 'Roboto', sans-serif;
              font-weight: bold; 
              text-shadow: 0 0 7px rgba(0, 0, 0, 0.8);
          }



        .darken-background::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Ubah alpha untuk mengatur kegelapan */
        }

        .darken-background blockquote {
            color: white;
            padding: 20px;
        }

        .container {
            display: flex; /* Menggunakan flexbox untuk menyusun elemen secara horizontal */
            align-items: flex-start;
            justify-content: space-between;
            margin: 100px 0px 50px 100px;
        }

        .horizontal-layout {
            display: flex; /* Menggunakan flexbox untuk menyusun elemen secara horizontal */
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px 50px 100px 50px;
        }

        .horizontal-layout .table-container {
            flex: 1; 
            margin-right: 20px; 
        }

        .horizontal-layout .calendar-container {
            flex: 1; 
        }

        .calendar-container {
           
            width: 40%;
           
        }

        #calendarContainer table {
            width: 10%; 
            border-collapse: collapse;
            margin-top: 50px;
        }

        #calendarContainer th, #calendarContainer td {
            border: 1px solid black; 
            padding: 3px; 
        }

        .table-container {
            width: 300px;
            margin-right: 150px;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1001;
            background-color: rgba(255, 255, 255, 0); 
        }

        .navbar-nav .nav-link.active:hover {
            color: #fff; 
            background-color: rgb(81, 96, 81); 
            transition: all 0.5s ease; 
        }

        .table-container {
         
            width: 300px;
           
        }

        #program-kerja {
            z-index: 1000;
            padding:50px 0 100px 0;
        }

        #shelter {
            z-index: 1000;
            padding:50px 0 100px 0;
        }

        body::-webkit-scrollbar {
            width: 0;
            height: 0; 
        }

        .btn.btn-outline-success {
    color: #28a745; 
    border-color: #28a745; 
        }
    
    </style>
</head>
<body>
  <!-- navigasi -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#program-kerja">Program Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#shelter">Shelter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kalender">Jadwal kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="adopsi.php">Adopsi kucing</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Keluar</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Masuk</a>
                </li>
            <?php endif; ?>
        </ul>

        </div>
    </div>
</nav>


<div class="darken-background">
    <h1 style="text-align: center; color: white;">KUMALAKADONG</h1>
    <h3 style="text-align: center; color: white;">KOMUNITAS PECINTA KUCING TERBESAR DI SAMARINDA</h3>
</div>

    <section id = "program-kerja" style="position: relative;">
      <div style="text-align: center; background-color: rgb(81, 96, 81); color: white;padding:20px">
        <span class="h1">PROGRAM KERJA</span> <br> <span class="h5">Apa saja yang kami lakukan?</span>
      </div>
    <div class="carousel slide" style="width: 50%; margin: 20px auto; border-radius: 15px; border: 10px solid rgb(81, 96, 81);" id="carouselExampleCaptions" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://lh3.googleusercontent.com/d/183-QNJUGcyeTtnkkjECAOPctgubFEwWS=w1000?authuser=0" class="d-block w-100" alt="street feeding">
        <div class="carousel-caption d-none d-md-block">
          <h5>Street feeding</h5>
          <p>Kami memastikan kucing liar tidak dalam keadaan lapar dengan cara
            melakukan street feeding setiap hari.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://lh3.googleusercontent.com/d/18EH672eaLvF43q2lX3dkBgjRuaX_Jh75=w1000?authuser=0" class="d-block w-100" alt="vet">
        <div class="carousel-caption d-none d-md-block">
          <h5>Penanganan pertama</h5>
          <p>Memastikan kucing telah terjamin kesehatannya dengan membawa kucing ke rumah sakit hewan
            segera apabila kondisi kucing mengkhawatirkan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://lh3.googleusercontent.com/d/1Y1fAfS1QFxxjXKIL1GMMx6tPIVVCS4pH=w1000?authuser=0" class="d-block w-100" alt="posyandu">
        <div class="carousel-caption d-none d-md-block">
          <h5>Posyandu</h5>
          <p>Mengadakan posyandu kucing dengan tujuan melakukan perawatan rutin </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://lh3.googleusercontent.com/d/1bGk5sB1HdjDjbuax9WP_TkGdPp4GC0gS=s220?authuser=0" class="d-block w-100" alt="posyandu">
        <div class="carousel-caption d-none d-md-block">
          <h5>Adopsi</h5>
          <p>Kami adopsi kucing yang memprihatinkan untuk dibawa ke shelter Kumalakadong </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section id="shelter" style="position: relative; ">
  <div style="text-align: center; background-color: rgb(81, 96, 81); color: white; padding:20px">
    <span class="h1">SHELTER</span> <br> <span class="h5">Tempat tinggal sementara kucing liar</span>
  </div>

  <div style="display: flex; align-items: center; justify-content: space-around; margin-top: 30px; margin-left: 30px; margin-right: 30px;">
    <p style="margin-right: 50px; margin-left:50px; text-align: justify;"> Kami memiliki komitmen yang kuat dalam membangun dan menjaga tempat penampungan bagi
      kucing yang berada dalam kondisi yang mengkhawatirkan, seperti <mark>menderita penyakit atau kekurangan gizi</mark>. Setiap harinya, dengan penuh dedikasi,
      anggota tim kami datang ke Shelter untuk merawat dan memberikan perhatian kepada kucing-kucing yang tinggal di sana.
    <br><br>
    Dengan bangga kami mencatat bahwa terdapat <mark>tidak kurang dari 25 kucing dewasa dan anak-anak</mark> yang diberikan tempat penampungan di rumah shelter kami.
    Kami berupaya untuk menjadi tempat yang aman dan nyaman bagi mereka, sehingga mereka dapat mendapatkan perawatan yang layak dan kasih sayang yang mereka butuhkan
  <br><br> Tidak jarang kami kehabisan pakan dan tidak ada ongkos untuk membeli, oleh karena itu kami membuka sistem donasi yang terbuka untuk umum.  
  </p>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 150%; border-radius: 15px; border: 10px solid rgb(81, 96, 81); margin-right: 50px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://lh3.googleusercontent.com/d/1Xj7zy96L4pEcvndMMrUu2B_x3SuG6_3z=w1000?authuser=0" class="d-block w-100" alt="shelter1">
        </div>
        <div class="carousel-item">
          <img src="https://lh3.googleusercontent.com/d/11zThRzY7h4tHI1PIGPdeSz9ofWr33MlV=w1000?authuser=0" class="d-block w-100" alt="shelter2">
        </div>
        <div class="carousel-item">
          <img src="https://lh3.googleusercontent.com/d/1KIxSjtSMHnSS1jNWhkZyB8UMDkyLGcQU=w1000?authuser=0" class="d-block w-100" alt="shelter3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div style="display: flex; justify-content: center; margin-top: 25px; margin-bottom: 100px;">
    <button type="button" class="btn btn-info" style="width: 75%;" onclick="window.location.href='donasi.php'">DONASI SEKARANG!</button>
  </div>
</section>

<section id="kalender" style="position: relative;">
<div style="text-align: center; background-color: rgb(81, 96, 81); color: white;padding:20px">
        <span class="h1">KEGIATAN</span> <br> <span class="h5">Apa saja jadwal kami?</span>
      </div>


<div id="calendarContainer" style="size: 60px; margin-bottom:30px"></div>


<!-- Bagian formulir untuk admin -->
<div id="formEvent" style="size: 6000px; margin-bottom:30px"></div>
<?php if ($is_admin): ?>
  <label for="datePicker">Pilih Tanggal:</label>
  <input type="date" id="datePicker" name="datePicker">
    <select id="colorPicker">
        <option value="#D1E7DD">Vaksin umum</option>
        <option value="#F8D7DA">Posyandu rutin</option>
        <option value="#FFF3CD">Steril bersama</option>
    </select>
<?php endif; ?>


<div class="calendar-and-user">
        <div id="calendarContainer"></div>

<script>
//untuk non admin
function generateCalendaruser() {
    var today = new Date(); // Dapatkan tanggal hari ini
    var year = today.getFullYear(); // Ambil tahun dari tanggal hari ini
    var month = today.getMonth() + 1; // Ambil bulan dari tanggal hari ini (perlu ditambah 1 karena indeks bulan dimulai dari 0)

    var daysInMonth = new Date(year, month, 0).getDate(); // Hitung jumlah hari dalam bulan ini
    var firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // Tentukan hari pertama dalam bulan ini

    var calendarTable = '<table>';
    calendarTable += '<thead><tr><th colspan="7">' + monthName(month - 1) + ' ' + year + '</th></tr>';
    calendarTable += '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead>';
    calendarTable += '<tbody>';

    var date = 1;
    for (var i = 0; i < 6; i++) {
        calendarTable += '<tr>';
        for (var j = 0; j < 7; j++) {
            if (i === 0 && j < firstDayOfMonth) {
                calendarTable += '<td></td>';
            } else if (date > daysInMonth) {
                break;
            } else {
                // Generate cellDate with two-digit format for day, month, and year
                var cellDate = year.toString().padStart(2, '0') + '-' + month.toString().padStart(2, '0') + '-' + date.toString().padStart(2, '0');

                var color = localStorage.getItem(cellDate);
                calendarTable += '<td style="background-color: ' + (color ? color : '') + '">' + date + '</td>';
                date++;
            }
        }
        calendarTable += '</tr>';
    }

    calendarTable += '</tbody></table>';

    document.getElementById('calendarContainer').innerHTML = calendarTable;
}

function monthName(monthIndex) {
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    return months[monthIndex];
}
 //untuk admin ==================
generateCalendaruser();

    function generateCalendar() {
        var datePicker = document.getElementById('datePicker');
        var selectedDate = new Date(datePicker.value);
        var year = selectedDate.getFullYear();
        
        var month = selectedDate.getMonth() + 1;
        

        var daysInMonth = new Date(year, month, 0).getDate();
        var firstDayOfMonth = new Date(year, month - 1, 1).getDay();

        var calendarTable = '<table>';
        calendarTable += '<thead><tr><th colspan="7">' + monthName(month - 1) + ' ' + year + '</th></tr>';
        calendarTable += '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr></thead>';
        calendarTable += '<tbody>';

        var date = 1;
        for (var i = 0; i < 6; i++) {
            calendarTable += '<tr>';
            for (var j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    calendarTable += '<td></td>';
                } else if (date > daysInMonth) {
                    break;
                } else {
                    // Generate cellDate with two-digit format for day, month, and year
                    var cellDate = year.toString().padStart(2, '0') + '-' + month.toString().padStart(2, '0') + '-' + date.toString().padStart(2, '0');

                    

                    var color = localStorage.getItem(cellDate);
                    calendarTable += '<td onclick="selectDate(this)" style="background-color: ' + (color ? color : '') + '">' + date + '</td>';
                    date++;
                }
            }
            calendarTable += '</tr>';
        }

        calendarTable += '</tbody></table>';

        document.getElementById('calendarContainer').innerHTML = calendarTable;
    }

    function selectDate(cell) {
        var selectedColor = document.getElementById('colorPicker').value;
        var selectedDate = document.getElementById('datePicker').value;
        var year = selectedDate.split('-')[0];
        var month = selectedDate.split('-')[1];
        var day = cell.textContent;
        cell.style.backgroundColor = selectedColor;
        var cellDate = year + '-' + month + '-' + day;
        localStorage.setItem(cellDate, selectedColor);
    }

    function applyBackgroundColor() {
        var selectedColor = document.getElementById('colorPicker').value;
        var selectedDate = document.getElementById('datePicker').value;
        var cells = document.querySelectorAll('td');
        var year = selectedDate.split('-')[0];
        var month = selectedDate.split('-')[1];
        var day = selectedDate.split('-')[2];
        for (var i = 0; i < cells.length; i++) {
            if (cells[i].textContent === day) {
                cells[i].style.backgroundColor = selectedColor;
                var cellDate = year + '-' + month + '-' + day;
                localStorage.setItem(cellDate, selectedColor);
                break;
            }
        }
    }

    function monthName(monthIndex) {
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        return months[monthIndex];
    }

    document.getElementById('datePicker').addEventListener('change', generateCalendar);
    
    // Set today's date as default and generate calendar
    var today = new Date().toISOString().slice(0, 10);
    document.getElementById('datePicker').value = today;
    generateCalendar();

    // Load saved colors from local storage
    window.onload = function() {
        var cells = document.querySelectorAll('td');
        cells.forEach(function(cell) {
            var cellDate = cell.parentNode.parentNode.parentNode.querySelector('th').textContent + '-' + cell.textContent.padStart(2, '0');
            var color = localStorage.getItem(cellDate);
            if (color) {
                cell.style.backgroundColor = color;
            }
        });
    }
    
</script>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-primary">
                    <td>Hari ini</td>
                </tr>
                <tr class="table-success">
                    <td>Vaksin umum</td>
                </tr>
                <tr class="table-danger">
                    <td>Posyandu rutin</td>
                </tr>
                <tr class="table-warning">
                    <td>Steril berjamaah</td>
                </tr>
            </tbody>
        </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
