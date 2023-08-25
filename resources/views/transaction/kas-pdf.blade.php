<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Result</title>
</head>
<style>
  img {
    background-color: #03514d;
    border-radius: 5px;
  }

  .watermark {
    font-family: 'Comfortaa', cursive;
  }
</style>

<body>
  <div class="container-fluid">
    <div class="container mt-3">
      <div class="row">
        <div class="col-1 text-center">
          <img src="img/logo.png" alt="" width="50px">
          <p class="mt-2 fs-5 watermark">KasKita</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h1 class="text-center mt-5">Kas Periode</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <table class="table table-bordered border-dark mt-5">
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

              @foreach ($kas as $item)
              <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td class="text-center">-</td>
                <td>-</td>
                <td class="text-center">-</td>
                <td class="text-center">-</td>
                <td class="text-center">Rp. 200.000</td>
              </tr>

              <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td class="text-center">{ $item->tanggal }}</td>
                <td>{{ $item->transaksi }}</td>
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
                <?php
                echo number_format($total = $total + $item->pemasukan - $item->pemgeluaran)
                ?>
                <td class="text-center">Rp.
                  <?php
                  echo number_format($total)
                  ?>
                </td>
              </tr>

              <tr>
                <td colspan="5" class="text-center fs-5 fw-bolder">Sisa Saldo</td>
                <td class="text-center fs-5 fw-bolder">Rp.
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

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>