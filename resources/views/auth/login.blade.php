<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
  <title>Login</title>
=======
  <title>Daftar</title>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
  <link rel="stylesheet" href="css/auth/login.css">
  <link rel="shortcut icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tittle text-center mt-5">
<<<<<<< HEAD
            <img src="img/logo.png" alt="">
            <h1>KasQta</h1>
=======
            <h1>KasKita</h1>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
          </div>
        </div>
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 mt-4">
          <form action="/loginuser" method="post">
            @csrf
<<<<<<< HEAD
            @if(session('login_error'))
            <div class="alert alert-danger" role="alert">
              {{ session('login_error') }}
            </div>
            @endif
            <input type="text" id="login-noHp" placeholder="Contoh: +6282134561234" name="notelpon" value="+62" required/>
            <input type="password" id="login-pass" placeholder="Password" name="password" required/>
            <a href="/">
              <button type="submit" class="">MASUK</button>
            </a>
          </form>
        </div>
        <div class="text-center mt-4">
          <span>Belum ada akun?</span>
          <a href="/register" id="sign-up">Daftar</a>
=======
            <input type="number" id="login-noHp" placeholder="No. Handphone" name="nama" />
            <input type="password" id="login-pass" placeholder="Password" name="password" />
            <a href="/">
              <button type="submit" class="">MASUK</button>
            </a>
            <!-- <div class="col-8">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div> -->
          </form>
        </div>
        <div class="text-center mt-4">
          <a href="/register" id="sign-up">Belum ada akun? Daftar</a>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
        </div>
      </div>
    </div>
  </div>

  <footer>
    <img src="{{ asset('/img/vectors.png')}}" alt="" title="">
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>