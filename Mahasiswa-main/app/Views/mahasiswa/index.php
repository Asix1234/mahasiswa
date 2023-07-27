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

  <table class="table" border="1">
    <br>
    <a href="tambah" class="btn btn-primary">Tambah</a>
    <br><br>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Angkatan</th>
        <th scope="col">Prodi</th>
        <th scope="col">Jenis Mahasiswa</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($datamhs as $mhs) : ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= $mhs->nim ?></td>
          <td><?= $mhs->nama ?></td>
          <td><?= $mhs->tgl_lahir ?></td>
          <td><?= $mhs->angkatan ?></td>
          <td><?= $mhs->nama_prodi ?></td>
          <td><?= $mhs->type_mhs ?></td>
          <td><a href="<?= base_url('/edit_data') . '/' . $mhs->nim  ?>" class="btn btn-primary">Edit</a> <a href="<?= base_url('/hapus_data') . '/' . $mhs->nim  ?>" class="btn btn-danger">Hapus</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>