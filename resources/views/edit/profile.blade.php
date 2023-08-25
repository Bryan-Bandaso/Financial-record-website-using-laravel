<!doctype html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="/css/home/profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: rgb(154, 244, 214);">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="bg-form">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                @if(session()->has('message'))
                <div class="text-green-600 mb-4">{{ session('messsage') }}</div>
                @endif
                <h3 class="text-center mb-4">EDIT PROFILE</h3>

                <div class="alert alert-danger" id="error" style="display: none;"></div>
                <div class="alert alert-success" id="successAuth" style="display: none;"></div>

                @error('notelpon')
                  <div class="invalid-feedback">
                    Nomor Telepon {{ $message }}
                  </div>
                @enderror
                <span>No. Handphone Baru</span>
                <input type="text" class="mb-3" id="no-hp" placeholder="Contoh: +6281234152612" value="+62">
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
                  <span>No. Handphone Terverifikasi</span>
                  <input type="text" name="notelpon" id="notelpon" class="@error('notelpon') is-invalid @enderror mb-3" class="mb-3" readonly>
                  @error('password')
                  <div class="invalid-feedback">
                    Password {{ $message }}
                  </div>
                  @enderror
                  <span>Edit Password</span>
                  <input type="password" name="password" id="password" class="@error('passowrd') is-invalid @enderror mb-3" placeholder="Masukkan Password Baru" class="mb-3">
                  <span>Ulangi Password Baru</span>
                  <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror mb-3" id="password-confirmation" placeholder="Ulangi Password Baru" class="mb-5">
                  @error('password_confirmation')
                  <div class="invalid-feedback">
                    Password Baru {{ $message }}
                  </div>
                  @enderror
                  <div class="row">
                    <div class="col-lg-2 back-btn">
                      <a href="/home" class="btn btn-success">Kembali</a>
                    </div>
                    <div class="col-lg-3 offset-lg-7">
                      <button type="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="/home" class="backBtn-mobileV">
    <button>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
      </svg>
    </button>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
      var number = $("#no-hp").val();
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
      const createNo = document.getElementById('no-hp').value;
      var code = $("#verification").val();
      coderesult.confirm(code).then(function(result) {
        var user = result.user;
        console.log(user);
        $("#successOTP").text("OTP Berhasil");
        $("#successOTP").show();
        const isian = document.getElementById('form1').notelpon.value = createNo;
      }).catch(function(error) {
        $("#error").text(error.message);
        $("#error").show();
      });
    }
  </script>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="/css/home/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: rgb(154, 244, 214);">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="bg-form mt-5">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h3 class="text-center mb-4">EDIT PROFILE</h3>
                                <form action="">
                                    <span>Edit No. Handphone</span>
                                    <input type="tel" name="notelpon" id="" placeholder="Masukkan No. Handphone Baru" class="mb-3">
                                    <span>Edit Password</span>
                                    <input type="password" name="password" id="" placeholder="Masukkan Password Baru" class="mb-3">
                                    <span>Ulangi Password Baru</span>
                                    <input type="password" name="edit-passUlangi" id="" placeholder="Ulangi Password Baru" class="mb-5">
                                    <div class="text-end">
                                        <a href="">
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
</body>

</html>