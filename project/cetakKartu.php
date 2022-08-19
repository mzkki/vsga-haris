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
            <a class="nav-link" aria-current="page" href="anggota.php">Anggota</a>
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
    <p class="mb-4">Halaman Cetak kartu <a href="anggota.php"><span class="badge bg-secondary">Kembali</span></a></p>
    <?php
    include 'dbconn.php';

    $id = $_GET['idAnggota'];
    $data = mysqli_query($conn, "select * from tb_anggota where idanggota='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

      <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-center"><?= $d['nama'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted text-center"><?= $d['idanggota'] ?></h6>
          <p class="card-text text-center"><?= $d['jenis_kelamin'] ?></p>
          <p class="card-text text-center"><?= $d['alamat'] ?></p>
        </div>
      </div>
    <?php
    } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>