<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print</title>
</head>

<body>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #customers {
      margin-top: 50px;
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #005638;
      color: white;
    }

    #center {
      text-align: center;
    }

    span {
      font-weight: 600;
      font-size: 20px;
    }

    h3 {
      margin-top: 50px;
      text-align: center;
    }
  </style>
  
  <h3>{{ $buku->nama_buku }}</h3>
  <table id="customers">
    <tr>
      <th class="parent">No</th>
      <th>Tanggal</th>
      <th>Transaksi</th>
      <th>Pemasukkan</th>
      <th>Pengeluaran</th>
      <th>Saldo</th>
    </tr>
    
    @php
    $no = 1;
    $total = 0;
    $saldo = 0;
    @endphp
    @foreach ($buku as $item)
    <tr>
      <td id="center">{{ $no++ }}</td>
      <td id="center">{{  date(' d-F-Y', strtotime($item->tanggal)) }}</td>
      <td id="center">{{ $item->transaksi }}</td>
      <td id="center">{{ $item->pemasukan }}</td>
      <td id="center">{{ $item->pengeluaran }}</td>
      <?php
      echo number_format($total = $total + $item->pemasukan - $item->pengeluaran)
      ?>
      <td id="center">{{ $total }}</td>
    </tr>
    @endforeach
    <tr>
      <td colspan="5" id="center"><span>Sisa Saldo</span></td>
      <?php
      echo number_format($total)
      ?>
      <td id="center"><span>Rp. {{ $total }}</span></td>
    </tr>

  </table>
</body>

</html>