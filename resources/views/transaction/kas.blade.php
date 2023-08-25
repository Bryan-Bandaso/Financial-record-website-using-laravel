<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail</title>
  <link rel="stylesheet" href="/css/home/kas.css">
  <link rel="shortcut icon" href="/img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid mt-3 position-relative">
    <div class="bg-navbar">
      <div class="row">
        <div class="col-lg-1 col-sm-1">
          <a href="/home">
<<<<<<< HEAD
            <img src="/img/logo.png" alt="" width="100%" height="100%">
=======
            <img src="img/logo.png" alt="" width="100%" height="100%">
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
          </a>
        </div>

        <div class="col-lg-5 col-sm-5">
<<<<<<< HEAD
          <h1 class="position-relative translate-middle-y top-50 name-app">KasQta</h1>
        </div>

        <div class="col-lg-6 col-sm-6" onclick="profile()">
          <svg id="user-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle position-absolute top-50 end-0 translate-middle-y" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#profileModal">
=======
          <h1 class="position-relative translate-middle-y top-50">KasKita</h1>
        </div>

        <div class="col-lg-6 col-sm-6">
          <svg id="user-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-person-circle position-absolute top-50 end-0 translate-middle-y" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#profileModal">
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
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
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
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
=======
  <div class="container-fluid mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <a href="" class="btn btn-danger">Hapus Buku Ini</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center mt-5 mb-5">Buku Kas Periode</h2>
        </div>
      </div>

      <form action="">
        <div class="row">
          <div class="col-lg-1 offset-lg-9 date-from">
            <p>Dari:</p>
          </div>
          <div class="col-lg-2">
            <input type="date" name="date-form">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-1 offset-lg-9 date-to">
            <p>Sampai:</p>
          </div>
          <div class="col-lg-2">
            <input type="date" name="date-to">
          </div>
        </div>
      </form>

      <div class="container-fluid mt-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <input type="search" name="pencarian-kas" id="search-btn" placeholder="Cari Transaksi">
            </div>

            <div class="col-lg-1 offset-lg-8">
              <a href="/export">
                <button type="button" id="pdf-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" id="print-icon" width="25" height="25" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                  </svg>Cetak
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- tabel -->
      <div class="lg-version">
        <div class="container-fluid mt-5">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-bordered border-dark mb-5">
                <thead>
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Transaksi</th>
                    <th scope="col">Pemasukkan</th>
                    <th scope="col">Pengeluaran</th>
                    <th scope="col">Saldo</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  $total = 0;
                  $saldo = 0;
                  @endphp

                  @foreach ($kaskita as $item)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td class="text-center">{{ $item->tanggal }}</td>
                    <td class="text-center">{{ $item->transaksi }}</td>
                    <td class="text-center">
                      <?php
                      echo number_format($item->pemasukan)
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                      echo number_format($item->pengeluaran)
                      ?>
                    </td>
                    <td class="text-center">
                      <?php
                      echo number_format($total = $total + $item->pemasukan - $item->pemgeluaran)
                      ?>
                    </td>

                  </tr>
                  @endforeach

                  <tr>
                    <td colspan="5" class="text-center fs-5 fw-bolder">Sisa Saldo</td>
                    <td class="text-center fs-5 fw-bolder">RP.
                      <?php
                      echo number_format($total)
                      ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="mobile-version">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-bordered border-dark mb-5">
                <thead>
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Transaksi</th>
                    <th scope="col">Lainnya</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;
                  $total = 0;
                  $saldo = 0;
                  @endphp

                  @foreach ($kaskita as $item)
                  <tr>
                    <th class="text-center">1</th>
                    <td class="text-center">-</td>
                    <td>-</td>
                    <td class="text-center">
                      <a href="more-info.html" id="full-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                        </svg>
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td class="text-center">{{ $item->tanggal }}</td>
                    <td class="text-center">{{ $item->transaksi }}</td>
                    <td class="text-center">
                      <a href="more-info.html" id="full-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <a href="/home">
                <button type="button" id="back-btn">Kembali</button>
              </a>
            </div>

            <div class="col-lg-2 offset-lg-10">
              <div class="add-btn">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                  </svg>
                  <span>Tambah Transaksi</span>
                </button>
              </div>
            </div>
          </div>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
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
            <input type="password" name="password" id="pass" class="mb-3 @error('password') is-invalid @enderror" placeholder="Password">
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
=======
  <!-- Buat Buku Kas Baru -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body form-add-transaksi">
          <form action="/insertkas" method="POST">
            @csrf
            <span>Tanggal</span>
            <input type="date" name="tanggal" id="" class="mb-3">
            <span>Transaksi</span>
            <input type="text" name="transaksi" id="" placeholder="Nama Transaksi" class="mb-3">
            <span>Pemasukkan</span>
            <input type="number" name="pemasukan" id="" placeholder="Nominal Pemasukkan" class="mb-3">
            <span>Pengeluaran</span>
            <input type="number" name="pengeluaran" id="" placeholder="Nominal Pengeluaran" class="mb-5">
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambahkan</button>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 offset-lg-1">
        <a href="/home" style="text-decoration: none;">
          <button id="home-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
            </svg>Beranda
          </button>
        </a>
      </div>

      <div class="col-lg-1 offset-lg-6">
        <a href="">
          <button id="print-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
              <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
              <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            </svg>Cetak
          </button>
        </a>
      </div>

      <div class="col-lg-1">
        <button id="setting-btn" onclick="settings()">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Delete Buku Btn -->
    <div class="bg-delete">
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-buku">Hapus Buku Ini</button>
    </div>


    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <h3 class="mt-4 mb-5">{{ $buku->nama_buku }}</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 offset-lg-1">
        @foreach($kaskita as $item)
        <form action="/kas/{{ $item->buku_id }}" method="GET">
          @endforeach
          <input type="date" name="tanggal_awal" id="date">
          <span>s/d</span>
          <input type="date" name="tanggal_akhir" id="date">
          <button id="filter-btn">Saring</button>
        </form>
      </div>

      <div class="col-2 offset-lg-4">
        @foreach($kaskita as $item)
        <form action="/kas/{{$item->buku_id}}" method="GET">
          @endforeach
          <input type="search" name="search" id="search-field" placeholder="Cari Transaksi">
        </form>
      </div>
    </div>

    <div class="lg-version">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 mt-5">
          <table class="table table-bordered border-dark">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Transaksi</th>
                <th scope="col">Pemasukkan</th>
                <th scope="col">Pengeluaran</th>
                <th scope="col">Sisa Saldo</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              $total = 0;
              $saldo = 0;
              @endphp

              @foreach ($kaskita as $item)
              <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td class="text-center">{{ date(' d F Y', strtotime($item->tanggal)) }}</td>
                <td>{{ $item->transaksi }}</td>
                <td class="text-center">Rp<?php echo number_format($item->pemasukan, "0", ".", ".") ?>
                </td>
                <td class="text-center">Rp<?php echo number_format($item->pengeluaran, "0", ".", ".") ?>
                </td>
                <td class="text-center">Rp<?php echo number_format($total = $total + $item->pemasukan - $item->pengeluaran, "0", ".", ".") ?>
                </td>
              </tr>
              @endforeach
              <tr>
                <td colspan="5" class="text-center fs-5 fw-bold bg-success text-white">Saldo Akhir</td>
                <td class="text-center fs-5 fw-bold">Rp
                  <?php
                  echo number_format($total, 0, ",", ".");
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="mobile-version">
      <table class="table table-bordered border-dark">
        <thead>
          <tr class="table-dark text-center">
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp

          @foreach ($kaskita as $item)
          <tr>
            <th scope="row" class="text-center">{{ $no++ }}</th>
            <td class="text-center">{{ date(' d F Y', strtotime($item->tanggal)) }}</td>
            <td class="text-center">
              <a href="/tampil-data/{{ $item->id }}" id="act-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <table class="table table-bordered border-dark">
        <thead>
          <tr class="table text-center">
            <th scope="col" class="bg-success text-white">Sisa Saldo</th>
            <th scope="col">Rp
              <?php
              echo number_format($total, 0, ",", ".");
              ?>
            </th>
          </tr>
        </thead>
      </table>
    </div>

    <button id="add-btn" data-bs-toggle="modal" data-bs-target="#add-kas">
      <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
      </svg><span>Tambah Transaksi</span>
    </button>

    <div class="row">
      <div class="col-12 text-center">
        <span class="fw-bolder" id="copyright">&copy; Copyright 2022 by <a href="/tentang" style="text-decoration: none;">ITTP Team</a></span>
      </div>
    </div>

    <!-- Modal Add Btn-->
    <div class="modal fade" id="add-kas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body add-transaksi">
            <form action="/insertkas/{{$buku_id}}" method="POST">
              @csrf
              <span>Tanggal</span>
              <input type="date" name="tanggal" id="" class="mb-3" required>
              <span>Transaksi</span>
              <input type="text" name="transaksi" id="" placeholder="Nama Transaksi" class="mb-3" required>
              <span>Pemasukkan</span>
              <input type="number" name="pemasukan" id="" placeholder="Jika Kosong, isi dengan 0" class="mb-3">
              <span>Pengeluaran</span>
              <input type="number" name="pengeluaran" id="" placeholder="Jika Kosong, isi dengan 0" class="mb-5">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Delete Buku -->
    <div class="modal fade" id="delete-buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Modal"><span>Hapus </span>{{ $buku->nama_buku }}?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-danger fs-5 text-white fw-bold">
            <p>SETELAH BUKU DIHAPUS, MAKA CATATAN AKAN HILANG SECARA PERMANEN!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="/delete/{{ $buku->id }}" class="btn btn-danger">Hapus</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      function profile() {
        const profileOption = document.querySelector('.profil-option');
        profileOption.classList.toggle('profil-active');
      }

      function settings() {
        const bgDelete = document.querySelector('.bg-delete')
        const settingBtn = document.getElementById('setting-btn');
        settingBtn.classList.toggle('rotate');
        bgDelete.classList.toggle('active');
      }

      const printBtn = document.getElementById('print-btn');

      printBtn.addEventListener('click', function() {
        print();
      })
    </script>

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
      function profile() {
        const profileOption = document.querySelector('.profil-option');
        profileOption.classList.toggle('profil-active');
      }
    </script>
=======
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
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
</body>

</html>