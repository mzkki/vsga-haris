<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VSGA Perpus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- As a link -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Perpustakaan DTS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-2 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="buku.php">Buku</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container mt-4">
    <h1>DTS Junior Web Developer</h1>
    <p class="mb-4">Halaman Data Anggota</p>
    <a href="tambahAnggota.php" class="btn btn-success mb-3">Tambah Anggota</a>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr class="table-dark">
            <th>No.</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'dbconn.php';
          $no = 1;
          $data = mysqli_query($conn, "select * from tb_anggota");
          while ($d = mysqli_fetch_array($data)) {
          ?>

            <tr>
              <td><?= $no++ ?></td>
              <td><?= $d['idanggota'] ?></td>
              <td><?= $d['nama'] ?></td>
              <td><?= $d['jenis_kelamin'] ?></td>
              <td><?= $d['alamat'] ?></td>
              <td><?= $d['status'] ?></td>
              <td>
                <a href="editAnggota.php?idAnggota=<?= $d['idanggota'] ?>" class="btn btn-primary my-2">
                  Ubah
                </a>
                <a href="cetakKartu.php?idAnggota=<?= $d['idanggota'] ?>" class="btn btn-success my-2">
                  Cetak
                </a>
                <a href="hapus.php?idanggota=<?= $d['idanggota'] ?>" onclick="return confirm ('yakin ingin menghapus data?')" class="btn btn-danger">
                  Hapus
                </a>
              </td>
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>