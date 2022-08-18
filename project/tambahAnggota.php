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
      <a class="navbar-brand" href="#">Anggota</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
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
    <p class="mb-4">Halaman Tambah Anggota</p>
    <form class="row g-3" action="aksiTambahAnggota.php" method="post">
      <div class="col-md-6">
        <label for="idAnggota" class="form-label">ID Anggota</label>
        <input type="text" class="form-control" id="idAnggota" name="idAnggota" placeholder="AG00X" required>
      </div>
      <div class="col-md-6">
        <label for="namaAnggota" class="form-label">Nama Anggota</label>
        <input type="text" class="form-control" id="namaAnggota" name="namaAnggota" placeholder="Samsuddin" required>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Alamat</label>
        <textarea name="alamat" id="inputAddress" cols="5" rows="2" class="form-control" placeholder="Jl. Jalanan 123"></textarea>
      </div>
      <div class="col-md-6">
        <label class="form-label">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="Pria">
          <label class="form-check-label" for="inlineRadio1">Pria</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="Perempuan">
          <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
      </div>
      <div class="col-md-6">
        <label for="statusPinjam" class="form-label">Status Pinjam</label>
        <select name="statusPinjam" id="statusPinjam" class="form-select" required>
          <option selected>Choose...</option>
          <option value="Sedang Meminjam">Sedang Meminjam</option>
          <option value="Tidak Meminjam">Tidak Meminjam</option>
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>