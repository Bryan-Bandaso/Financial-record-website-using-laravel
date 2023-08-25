<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar</title>
  <link rel="stylesheet" href="css/auth/register.css">
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
            <h1>DAFTAR</h1>
          </div>
        </div>
<<<<<<< HEAD

        <div class="row">
          <div class="col-lg-5 offset-lg-1">
            <div class="alert alert-danger" id="error" style="display: none;"></div>
            <div class="alert alert-success" id="successAuth" style="display: none;"></div>

            @error('notelpon')
              <div class="invalid-feedback">
                Nomor Telepon {{ $message }}
              </div>
            @enderror
            <span>No. Handphone</span>
            <input type="text" id="nomor-hp" placeholder="Contoh: +6282190871231" class="mb-3" value="+62">
            <div class="mb-2" id="recaptcha-container"></div>
            <button class="btn btn-primary mb-3" onclick="sendOTP()">Minta OTP</button><br>
            <div class="alert alert-success" id="successOTP" style="display: none;"></div>
            <span>Masukkan OTP</span>
            <input type="text" class="mb-2" id="verification" placeholder="Contoh: 123456" required>
            <button class="btn btn-info mb-3" onclick="verify()">Verifikasi</button>
          </div>
          <div class="col-lg-5">
            <form action="/registeruser" method="post" id="form1">
              @csrf
              @if(session('duplicate'))
              <div class="alert alert-danger" role="alert">
                {{ session('duplicate') }}
              </div>
              @endif
              @error('nama')
              <div class="invalid-feedback">
                Nama Lengkap {{ $message }}
              </div>
              @enderror
              <span>Masukkan Nama Lengkap</span>
              <input type="text" name="nama" class="mb-3 @error('nama') is-invalid @enderror" placeholder="Nama Lengkap">
              @error('notelpon')
              <div class="invalid-feedback">
                Nomor Telepon {{ $message }}
              </div>
              @enderror
              <span>No. Handphone</span>
              <input type="text" id="noHp" name="notelpon" class="mb-3 @error('notelpon') is-invalid @enderror" placeholder="Nomor Terverifikasi" value="" readonly>
              @error('password')
              <div class="invalid-feedback">
                Password {{ $message }}
              </div>
              @enderror
              <span>Password</span>
              <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Password">
              <button id="daftar">DAFTAR</button>
            </form>
          </div>
=======
        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 form-daftar">
          <form action="/registeruser" method="post">
            @csrf
            <span>Nama Lengkap</span>
            <input type="text" id="full-name" name="nama" placeholder="Masukkan Nama Lengkap" />
            @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <span>No. Handphone</span>
            <input type="number" id="nomor-hp" name="notelpon" placeholder="Masukkan No. Handphone" />
            @error('notelpon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <span>Password</span>
            <input type="password" id="pass" name="password" placeholder="Masukkan Password" />
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <a href="">
              <button>DAFTAR</button>
            </a>
          </form>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
        </div>
      </div>
    </div>
  </div>

  <footer>
    <img src="{{ asset('/img/vectors.png')}}" alt="" />
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<<<<<<< HEAD
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
  <script>
    var firebaseConfig = {
      apiKey: "AIzaSyAzxkC3Ep_KHLTh0VPhGgt_IYe9pxUqCkc",
      authDomain: "testotp-db2b0.firebaseapp.com",
      projectId: "testotp-db2b0",
      storageBucket: "testotp-db2b0.appspot.com",
      messagingSenderId: "824617824880",
      appId: "1:824617824880:web:dbaf2b0555f18137f57ab5",
      measurementId: "G-QNB789TTB6"
    };
    firebase.initializeApp(firebaseConfig);
  </script>
  <script type="text/javascript">
    window.onload = function() {
      render();
    };

    function render() {
      window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
      recaptchaVerifier.render();
    }

    function sendOTP() {
      var number = $("#nomor-hp").val();
      firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        $("#successAuth").text("OTP Terkirim");
        $("#successAuth").show();
      }).catch(function(error) {
        $("#error").text(error.message);
        $("#error").show();
      });
    }

    function verify() {
      const createNo = document.getElementById('nomor-hp').value;
      var code = $("#verification").val();
      coderesult.confirm(code).then(function(result) {
        var user = result.user;
        console.log(user);
        $("#successOTP").text("OTP Berhasil");
        $("#successOTP").show();
        const isian = document.getElementById('form1').noHp.value = createNo;
      }).catch(function(error) {
        $("#error").text("OTP Salah! Harap Masukkan OTP dengan Benar");
        $("#error").show();
      });
    }
  </script>
=======
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
</body>

</html>