<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="css/home/home.css">
  <link rel="shortcut icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <div class="container-fluid mt-3 position-relative">
    <div class="bg-navbar">
      <div class="row">
        <div class="col-lg-1 col-sm-1">
          <a href="/home">
            <img src="img/logo.png" alt="" width="100%" height="100%">
          </a>
        </div>

        <div class="col-lg-5 col-sm-5">
          <h1 class="position-relative translate-middle-y top-50 name-app">KasQta</h1>
        </div>

        <div class="col-lg-6 col-sm-6" onclick="profile()">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" id="user-icon" height="50" fill="white" class="bi bi-person-circle position-absolute top-50 end-0 translate-middle-y" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class="profil-option">
    <div class="list">
      <button data-bs-toggle="modal" data-bs-target="#lihat-profile">Lihat Profil</button>
    </div>
    <div class="list">
      <button data-bs-toggle="modal" data-bs-target="#edit-profile">Edit Profil</button>
    </div>
    <div class="list">
      <a href="/logout">
        <span>Keluar</span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
      </a>
    </div>
  </div>

  <!-- Modal Lihat Profile -->
  <div class="modal fade" id="lihat-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informasi Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>Nama Lengkap:</h6>
          <span>{{ auth()->user()->nama }}</span>
          <h6 class="mt-4">Nomor Handphone:</h6>
          <span>+{{ auth()->user()->notelpon }}</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Profile -->
  <div class="modal fade" id="edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
          <form action="{{ route('profile.edit')}}" method="POST" id="form1">
            @csrf
            @method('PUT')
            @if(session('duplicate'))
              <div class="alert alert-danger" role="alert">
                {{ session('duplicate') }}
              </div>
              @endif
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
              <input type="password" name="password" class="mb-3 @error('password') is-invalid @enderror" placeholder="Password">
              <span>Ulangi Password</span>
              <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror mb-3" id="password-confirmation" placeholder="Ulangi Password Baru" class="mb-5">
              @error('password_confirmation')
                <div class="invalid-feedback">
                  Password Baru {{ $message }}
                </div>
              @enderror
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-3">
          <div class="new-book">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal">Buat Buku Kas</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">

        @foreach($buku as $key=>$value)
        <div class="col-lg-3 mb-3">
          <a href="/kas/{{$value->id}}" style="text-decoration: none; color: black;">
            <div class="kas-book position-relative">
              <div class="row">
                <div class="col-lg-4">
                  <img src="img/economics 1.png" alt="">
                </div>
                <div class="col-lg-8">
                  <p class="position-absolute translate-middle-y top-50">{{ $value->nama_buku }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Buat Buku Kas Baru -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat Buku Kas Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/insert" method="POST">
            @csrf
            <span>Nama Buku Kas</span>
            <input type="text" name="nama_buku" id="" placeholder="Nama Buku Kas" class="mb-3" required>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <span class="fw-bolder" id="copyright">&copy; Copyright 2022 by <a href="/tentang" style="text-decoration: none;">ITTP Team</a></span>
      </div>
    </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
  <script>
    function profile(){
      const profileOption = document.querySelector('.profil-option');
      profileOption.classList.toggle('profil-active');
    }
  </script>
</body>

</html>