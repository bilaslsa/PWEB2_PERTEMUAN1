<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Tugas</th>
          <th scope="col">UTS</th>
          <th scope="col">UAS</th>
          <th scope="col">Total</th>
          <th scope="col">Predikat</th>
        </tr>
      </thead>
      <?php 
        // Data mahasiswa
        $nilai1 = ["nim" => 110224031, "nama" => "Salsabila", "tugas" => 90, "uts" => 90, "uas" => 90];
        $nilai2 = ["nim" => 110224032, "nama" => "Caca", "tugas" => 90, "uts" => 90, "uas" => 90];
        $nilai3 = ["nim" => 110224033, "nama" => "Putri", "tugas" => 80, "uts" => 80, "uas" => 80];
        $mhs = [$nilai1, $nilai2, $nilai3];
      ?>
      <tbody>
        <?php 
        $no = 1; 
        // Loop untuk menampilkan data mahasiswa
        foreach ($mhs as $item) {
          // Menghitung total
          $total = ($item['tugas'] * 0.3) + ($item['uts'] * 0.3) + ($item['uas'] * 0.4);
          
          // Menentukan predikat berdasarkan total
          $predikat = "";
          if ($total >= 85) {
            $predikat = "A";
          } else if ($total >= 75) {
            $predikat = "B";
          } else if ($total >= 60) {
            $predikat = "C";
          } else if ($total >= 50) {
            $predikat = "D";
          } else {
            $predikat = "E";
          }
        ?>
        <!-- Menampilkan data di dalam tabel -->
        <tr>
          <td scope="col"><?=$no++?></td>
          <td scope="col"><?=$item['nim']?></td>
          <td scope="col"><?=$item['nama']?></td>
          <td scope="col"><?=$item['tugas']?></td>
          <td scope="col"><?=$item['uts']?></td>
          <td scope="col"><?=$item['uas']?></td>
          <td scope="col"><?=number_format($total, 2)?></td>
          <td scope="col"><?=$predikat?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>