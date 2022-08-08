<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg?w=740&t=st=1659950994~exp=1659951594~hmac=bed8fdebc1f9aebd674d5659820a8fd7dcc13e749b29bac43bb42bb5a46e955d" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <h4 class="mb-4 text-center">Login Page</h4>
          <?php
          if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == 'loginfailed') {
              echo '<div class="alert alert-danger" role="alert">Username atau password salah !</div>';
            }
            if ($_GET['pesan'] == 'logout') {
              echo '<div class="alert alert-success" role="alert">Kamu berhasil logout !</div>';
            }
          }
          ?>
          <form method="post" action="login.php">
            <!-- Email input -->
            <!-- <div class="form-floating mb-4">
              <input type="text" id="floatingInput" class="form-control form-control-lg" name="username" />
              <label for="floatingInput">Username</label>
            </div> -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
              <label for="floatingInput">Username</label>
            </div>

            <!-- Password input -->
            <!-- <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
              <input type="password" id="form 1Example23" class="form-control form-control-lg" name="password" />
            </div>
             -->
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
              <label for="floatingInput">Password</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>