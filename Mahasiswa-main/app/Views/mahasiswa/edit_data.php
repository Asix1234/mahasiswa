<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kelompok 2</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Data Mahasiswa</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <table border="1">
    <br>
    <form action="<?= base_url('proses_edit') . '/' . $datamhs['nim'] ?>" method="post">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-1 col-form-label">NIM</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="exampeInputText" name="nim" value="<?= $datamhs['nim'] ?>" readonly>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Nama</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="exampeInputText" name="nama" value="<?= $datamhs['nama'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-5">
          <input type="date" class="form-control" id="exampeInputDate" name="tgl_lahir" value="<?= $datamhs['tgl_lahir'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Angkatan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="exampeInputText" name="angkatan" value="<?= $datamhs['angkatan'] ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Prodi</label>
        <div class="col-sm-5">
          <select class="form-select" aria-label="Default select example" name="prodi_id">
            <?php foreach ($prodi as $key) : ?>
              <option value="<?= $key['prodi_id'] ?>"><?= $key['nama_prodi'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Jenis Mahasiwa</label>
        <div class="col-sm-5">
          <select class="form-select" aria-label="Default select example" name="type_id">
            <?php foreach ($typemhs as $key) : ?>
              <option value="<?= $key['type_id'] ?>"><?= $key['type_mhs'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <a href="/" class="btn btn-secondary">Back</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </table>

</body>

</html>