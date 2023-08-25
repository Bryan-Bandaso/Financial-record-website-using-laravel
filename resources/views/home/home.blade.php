<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="/css/home/home.css">
  <link rel="shortcut icon" href="assets/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

  <div class="container-fluid mt-3 position-relative">
    <div class="bg-navbar">
      <div class="row">
        <div class="col-lg-2 col-sm-1">

        </div>

        <div class="col-lg-4 col-sm-5">
          <h1 class="position-relative translate-middle-y top-50">KasKita</h1>
        </div>

        <div class="col-lg-6 col-sm-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-person-circle position-absolute top-50 end-0 translate-middle-y" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#profileModal">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
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
  </div>

  <div class="container-fluid mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <a href="/kas" style="text-decoration: none; color: black;">
            <div class="kas-book position-relative">
              <div class="row">
                <div class="col-lg-4">
                  <img src="img/economics 1.png" alt="">
                </div>
                <div class="col-lg-8">
                  <p class="position-absolute translate-middle-y top-50">Buku Kas Periode</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <a href="/kas" style="text-decoration: none; color: black;">
            <div class="kas-book position-relative">
              <div class="row">
                <div class="col-lg-4">
                  <img src="img/economics 1.png" alt="">
                </div>
                <div class="col-lg-8">
                  <p class="position-absolute translate-middle-y top-50">KasKita</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <img src="img/vectors.png" alt="">
  </footer>

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
            <input type="text" name="nama_buku" id="" placeholder="Nama Buku Kas" class="mb-3">
            <span>Saldo Awal</span>
            <input type="number" name="saldo" id="" placeholder="Masukkan Saldo Awal" class="mb-5">
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Profile -->
  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kank Alwi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <span>Nomor Handphone:</span>
            </div>
            <div class="col-lg-12 mb-3">
              <span id="no-hp-read">082136521478</span>
            </div>
            <div class="col-lg-12">
              <span>Password:</span>
            </div>
            <div class="col-lg-12 mb-3">
              <span id="no-hp-read">********</span>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="/profil">
            <button type="button" class="btn btn-info text-light">Edit Profile</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>