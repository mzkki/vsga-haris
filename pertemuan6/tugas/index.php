<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
</head>

<body>
  <h1>Form Biodata</h1>
  <?php
  if (isset($_GET['data'])) {
    if ($_GET['data'] == 'kosong') {
      echo "<h4 style='color:red'> pastikan semua input terisi </h4>";
    }
  }
  ?>
  <h4>Isi Form Biodata dibawah ini</h4>
  <form action="biodata.php" method="POST">
    <table>
      <tr>
        <div class="nama">
          <td><label for="nama">Nama</label></td>
          <td><input type="text" name="nama" id="nama" placeholder="Nama"></td>
        </div>
      </tr>
      <tr>
        <div class="alamat">
          <td><label for="alamat">Alamat</label></td>
          <td><input type="text" name="alamat" id="alamat" placeholder="Alamat"></td>
        </div>
      </tr>
      <tr>
        <div class="ttl">
          <td><label for="ttl">Tempat Tanggal Lahir</label></td>
          <td><input type="text" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir"></td>
        </div>
      </tr>
      <tr>
        <div class="jenis_kelamin">
          <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
          <td>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
            <label for="jenis_kelamin">Laki-laki</label>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
            <label for="jenis_kelamin">Perempuan</label>
          </td>
        </div>
      </tr>
      <tr>
        <div class="umur">
          <td><label for="umur">Umur</label></td>
          <td><input type="text" name="umur" id="umur" placeholder="Umur"></td>
        </div>
      </tr>
      <br>
      <tr>
        <td><button type="submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</body>

</html>

<!-- 
  nama
  alamat
  tempat tgl lahir
  jenis kelamin
  usia
 -->