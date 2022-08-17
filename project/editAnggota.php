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
            <a class="nav-link" aria-current="page" href="anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tambahBuku.php">Tambah Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tambahAnggota.php">Tambah Anggota</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>DTS Junior Web Developer</h1>
    <p class="mb-4">Halaman Edit Anggota</p>
    <?php
    include 'dbconn.php';
    if (!isset($_GET['idAnggota']) || $_GET['idAnggota'] == "") {
      echo "Data Tidak Ditemukan";
    } else {
      $idAnggota = $_GET['idAnggota'];

      $data = mysqli_query($conn, "select * from tb_anggota where idanggota='$idAnggota'");
      while ($d = mysqli_fetch_array($data)) {
    ?>
        <form class="row g-3" action="aksiEditAnggota.php" method="post">
          <div class="col-md-6">
            <label for="idAnggota" class="form-label">ID Anggota</label>
            <input type="text" class="form-control" id="idAnggota" name="idAnggota" value="<?= $d['idanggota'] ?>" placeholder="AG00X" readonly required>
          </div>
          <div class="col-md-6">
            <label for="namaAnggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="namaAnggota" name="namaAnggota" value="<?= $d['nama'] ?>" placeholder="Samsuddin" required>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Alamat</label>
            <textarea name="alamat" id="inputAddress" cols="5" rows="2" class="form-control" placeholder="Jl. Jalanan 123"><?= $d['nama'] ?></textarea>
          </div>
          <div class="col-md-6">
            <label class="form-label">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="Pria" <?php if ($d['jenis_kelamin'] == 'Pria') echo "checked" ?>>
              <label class="form-check-label" for="inlineRadio1">Pria</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="Perempuan" <?php if ($d['jenis_kelamin'] == 'Perempuan') echo "checked" ?>>
              <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
          </div>
          <div class="col-md-6">
            <label for="statusPinjam" class="form-label">Status Pinjam</label>
            <select name="statusPinjam" id="statusPinjam" class="form-select" required>
              <option selected>Choose...</option>
              <option value="Sedang Meminjam" <?php if ($d['status'] == 'Sedang Meminjam') echo "selected" ?>>Sedang Meminjam</option>
              <option value="Tidak Meminjam" <?php if ($d['status'] == 'Tidak Meminjam') echo "selected" ?>>Tidak Meminjam</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="anggota.php" class="btn btn-secondary">Kembali</a>
          </div>
      <?php
      }
    } ?>
        </form>
  </div>
</body>

</html>