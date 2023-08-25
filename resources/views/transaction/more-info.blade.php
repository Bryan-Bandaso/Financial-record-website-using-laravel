<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
<<<<<<< HEAD
  <link rel="stylesheet" href="/css/about-us.css">
  <link rel="shortcut icon" href="/img/logo.png">
=======
  <link rel="stylesheet" href="css/transaction/more-info.css">
  <link rel="shortcut icon" href="img/logo.png">
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>More Info</title>
</head>

<body style="background-color: rgb(169, 192, 204);">
  <div class="container-fluid">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card-bg">
<<<<<<< HEAD
            @php
              $total = 0;
            @endphp
            <span id="atribut">Tanggal:</span>
            <p>{{ date(' d F Y', strtotime($kaskita->tanggal)) }}</p>
            <span id="atribut">Transaksi:</span>
            <p>{{ $kaskita->transaksi }}</p>
            <span id="atribut">Pemasukkan:</span>
            <p>Rp 
              <?php
                echo number_format($kaskita->pemasukan,0,",",".");
              ?>
            </p>
            <span id="atribut">Pengeluaran:</span>
            <p>Rp 
              <?php
                echo number_format($kaskita->pengeluaran,0,",",".");
              ?>
            </p>
=======
            @foreach ($kas as $item)
            <span id="atribut">Tanggal:</span>
            <p>{{ $item->tanggal }}</p>
            <span id="atribut">Transaksi:</span>
            <p>{{ $item->transaksi }}</p>
            <span id="atribut">Pemasukkan:</span>
            <p>
              <?php
              echo number_format($item->pemasukan)
              ?>
            </p>
            <span id="atribut">Pengeluaran:</span>
            <p>
              <?php
              echo number_format($item->pengeluaran)
              ?>
            </p>
            <span id="atribut">Saldo: RP.</span>
            <p>
              <?php
              echo number_format($total = $total + $item->pemasukan - $item->pemgeluaran)
              ?>
            </p>
            @foreach ($kas as $item)
            <a href="detail-kas.html" class="btn btn-success mt-5">Kembali</a>
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<<<<<<< HEAD
=======

>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>