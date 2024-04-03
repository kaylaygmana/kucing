<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Tambah Kegiatan</h1>
    <form method="post">
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="hidden" id="tanggal_terpilih" name="tanggal_terpilih">

        </div>
        <div class="mb-3">
            <label for="kegiatan" class="form-label">Jenis Kegiatan</label>
            <select class="form-select" id="kegiatan" name="kegiatan" required>
                <option value="">Pilih Jenis Kegiatan</option>
                <option value="Vaksin Umum">Vaksin Umum</option>
                <option value="Posyandu Rutin">Posyandu Rutin</option>
                <option value="Steril Berjamaah">Steril Berjamaah</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kegiatan</button>
    </form>
</div>


</body>
</html>
