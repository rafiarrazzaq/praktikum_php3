<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <style>
    body {
      height: 100%;
    }

    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<?php

include_once 'class_lingkaran.php';

$nama_siswa = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];


$list1 = ['nama' => 'Rivan Albani Ray','gender' => 'Laki-Laki','umur' => 19, 'berat' => 66, 'tinggi' => 168];
$list2 = ['nama' => $nama_siswa,'gender' => $gender, 'umur' => $umur, 'berat' => $berat, 'tinggi' => $tinggi];

$list_siswa = [$list1, $list2];


?>

<body>
  <div class="row">
    <div class="col-md-12 mb-5">
      <h3 class="card-header text-white bg-success" align="center">Daftar Nilai Siswa</h3>
    </div>
    <div class="col-md-12">
      <div class="card mb-3">
        <div class="card-body">
          <table class="table table-warning">
            <thead class="thead-dark">
              <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>BMI</th>
                        <th>Hasil</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              // foreach ($ar_nilai as $ns) {
                foreach ($list_siswa as $action) {
                  $bmiPasien = new BmiPasien($action['nama'],$action['umur'],$action['gender'],$action['berat'],$action['tinggi']);
              ?>
                <tr>

                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $action['nama'] ?></td>
                  <td><?= $action['umur'] ?></td>
                  <td><?= $action['gender'] ?></td>
                  <td><?= $action['berat'] ?></td>
                  <td><?= $action['tinggi'] ?></td>
                  <td><?= substr($bmiPasien -> statusBMI(), 0, 5) ?></td>
                  <td><?= $bmiPasien -> hasilBmi($bmiPasien -> statusBMI()) ?></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>