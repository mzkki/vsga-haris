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
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex">
        <ul class="navbar-nav me-2 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tambahBuku.php">Tambah Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tambahAnggota.php">Tambah Anggota</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>DTS Junior Web Developer</h1>
    <p class="mb-4">Halaman Data Anggota</p>
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
              <a href="editAnggota.php?idAnggota=<?= $d['idanggota'] ?>">
                <div class="badge text-bg-primary">Edit</div>
              </a>
              <a href="hapus.php?idanggota=<?= $d['idanggota'] ?>" onclick="return confirm ('yakin ingin menghapus data?')">
                <div class="badge text-bg-danger">Hapus</div>
              </a>
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>