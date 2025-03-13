<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Samping Form</title>
  <!-- Link ke file CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
        .table-bordered-sides {
            border-left: 2px solid #dee2e6;
            border-right: 2px solid #dee2e6;
         }
     </style>
</head>
<body>

  <div class="container mt-4">
    <div class="row">
      <!-- Kolom untuk Form -->
      <div class="col-md-8">
        <h3>Belanja Online</h3>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group row">
              <label for="pembeli" class="col-4 col-form-label">Costumer</label> 
              <div class="col-4">
                <input id="pembeli" name="pembeli" placeholder="Nama costumer" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Pilih Produk</label> 
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                  <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                  <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                  <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
              </div>
            </div> 
            <div class="form-group row">
              <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
              <div class="col-4">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-2">
                <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
          </form>
      </div>

      <!-- Kolom untuk Tabel -->
      <div class="col-md-4" id="harga">
        <table class="table table-bordered-sides">
            <tbody>
                <tr class="table-primary">
                     <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>KULKAS : 3.100.00</td>
                </tr>
                <tr>
                    <td>MESIN CUCI : 3.800.000 </td>
                </tr>
                <tr class="table-primary">
                    <td>Harga dapat berubah setiap saat</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- php -->
   
   <hr>
   <?php
      if (isset($_POST ['submit'])) {
        $costumer = $_POST["pembeli"];
        $produk = $_POST["produk"];
        $jumlah = $_POST["jumlah"];
       // Daftar harga produk
        $harga = [
          "TV" => 4200000,
          "KULKAS" => 3100000,
          "MESIN CUCI" => 3800000
          ];
        $total = $harga[$produk] * $jumlah;


        echo "Nama Cosutumer : $costumer <br>";
        echo "Produk pilihan : $produk <br>";
        echo "Jumlah beli : $jumlah <br>";
        echo "Total harga : $total <br>";

      }

      // menentukan harga berdasarkan jumlah produk
      // function total

?>


</body>
</html>