<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Lepas Adopsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .form-control {
            width: 80%; /* Perkecil lebar form */
        }
        .form-label {
            font-size: 1.2em; /* Atur ukuran font label */
        }
        textarea.form-control {
            resize: vertical; /* Biarkan textarea dapat diresize secara vertikal */
        }
    </style>
</head>
<body>
<nav style="position: sticky; top: 0; z-index: 1000;" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="adopsi.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="form_upload.php">Unggah</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="text-center">
                <h2>Formulir Lepas Adopsi</h2>
            </div>
            <div class="mt-5">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5"></textarea> <!-- Lebih besar kotak deskripsi -->
                    </div>

					<div class="mb-3">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="text" name="nowa" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-oc5w1I1FmobXK2ud7XHPlzU8h74jjj1lGevcZ1n8+50=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
