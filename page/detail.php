<?php

// Jika nilai $_GET['id'] tidak ada maka akan di kembalikan ke index.php kemudia program detail.php akan di hentikan
if ( !isset($_GET['id']) || !isset($_GET['merek'])) {
   header("Location: index.php");
   exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style CSS -->
    <link rel="stylesheet" href="../style/style.css">

</head>
<body id="body">

<?php
// mengambil nilai dari database.php
require "database/database.php";

// jika $_GET['id'] tidak ada di array $sepatu maka akan ada peringatan barang tidak di temukan
if (!isset($sepatu[$_GET['id']])) {
    echo 'maaf barang tidak ditemukan';
   exit;
}

// mengambil data dari variable global yang dikirim dari home.php
$spt = $sepatu[$_GET['id']];
$hargaAsli = $spt['harga'];
$harga = $spt['harga'];
$text_harga = number_format($harga,0,',','.');
$merek = $spt['merek'];
$des = $spt['des'];

?>
    
<!-- menampilkan data prodak -->
<div class="prodak">
    <div class="kembali" id="kembali">
        <div class="container">
        </div>
    </div>
    <div class="foto" id="foto">
        <div class="container">
            <div class="box">
            <img src="img/<?= $spt['gambar']; ?>" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box">
            <div class="gambar" >
                <img src="img/<?= $spt['gambar']; ?>" alt="" id="gambar">
            </div>
            <div class="detail">
                <ul>
                    <li class="merek">
                    <h1 ><?= $merek ?> <label id="result"><script>memilih();</script></label></h1>
                    </li>

                    <div class="border-harga">
                    <li class="harga">
                        <p>Rp <?= $text_harga ?></p>
                    </li>
                    <li class="ukrn">
                        
                    
                        <!-- form pilihan ukuran -->
                        <b>Ukuran</b>  <form action="" method="post">
            
                         <?php
                        // mengambil array ukuran
                        $ukuran = $spt['ukuran'];

                        foreach($ukuran as $ukuran):?>
                        
                            <!-- sebagai radio button untuk memilih ukuran -->
                        <label for="<?=$ukuran?>"><input class="ukuran" type="radio" name="ukuran" value="<?=$ukuran?>" id="<?=$ukuran?>"><span class="tombol-ukuran"><?=$ukuran?></span>  </label> &nbsp;&nbsp;
                
                        <?php endforeach ?>
                            <label for="jumlah" class="nomer">Jumlah : <br>
                            <input type="number" id="jumlah" name="jumlah"  value="1"></label>

                            
                            <div class="jumlah">
                            <button type="submit" id="beli">BELI</button>
                        </form>


                        <!-- Kahir form pilihan Ukuran -->

                        </div>
                        <script src="js/script.js"></script>
                         
                        <?php  
                        // mengambil data merek
                        $merek = $spt['merek']; 

                        // jika $_POST['jumlah'] ada maka $jumlah = $_POST['jumlah] untuk mengambil data jumlah yang di pilih
                        
                        if (isset($_POST['jumlah'])) {

                            // Jika nilai ukuran tidak ada mana akan ada peringatan
                            if(!isset($_POST['ukuran'])){
                                echo"<script>alert('pilih nomor dulu');</script>";
                            
                            // Jika ada maka $ukuran = $_POST['ukuran']
                            }elseif(isset($_POST['ukuran'])){
                                $ukuran = $_POST['ukuran'];
                            }
                            
                            // Jika jumlah barang kurang dari satu maka ada peringatan dan program di bawah akan dihentikan
                            $jumlah = $_POST['jumlah'];
                            if ($jumlah < 1) {
                                echo"<script>alert('Jumlah tidak boleh kurang dari 1');</script>";
                            }
            
                            // menghitung jumlah total hitung
                            $tot_harga = $harga * $jumlah;
                            $tot_harga = number_format($tot_harga,0,',','.');
                        }else{
                            $ukuran = "merek tidak diketahui";
                        }
                            
                        ?>             
                    </li>
                </ul>  
            </div>
        </div>
    </div>
</div>

<!-- Akhir Data Produk -->

<!-- Awal Deskripsi -->
<div class="clear">
<div class="deskripsi">  
    <div class="container">
        <div class="teks-descripsi">
        <h5>Deskripsi Produk</h5>
        <p><?= $des ?></p>  
        </div>
    </div>
</div>
<!-- akhir Deskripsi -->



<!-- jika $_POST['ukuran'] dan $_POST['jumlah']) memiliki nilai maka akan di alihkan ke link whatsapp -->
<?php if (isset($_POST['ukuran']) and ($_POST['jumlah'])) :
// link whatsapp
$lokasi ="https://api.whatsapp.com/send?phone=6285647715796&text=Beli%0ASepatu%20:%20$merek%0AUkuran%20:%20$ukuran%0AHarga%20:%20$text_harga%0AJumlah%20:%20$jumlah%0ATotal%20Harga%20:%20$tot_harga";

// jika $jumlah lebih dari 1 maka clas pembelian muncul
if ($jumlah > 0) :
?>

        <!-- backgron kembali -->
        <div class="tidak-jadi" id="tidak-jadi">
            <div class="container"></div>
        </div>
        <!-- tampilan detail pembelian -->
        <div class="pembelian" id="pembelian">
            <div class="container">
                <h4>MEREK</h4>
                <h2><?= $merek ?></h2>
                <h4>UKURAN</h4>
                <h2><?= $ukuran ?></h2>
                <h4>HARGA</h4>
                <h2><?= $text_harga ?></h2>
                <h4>JUMLAH</h4>
                <h2><?= $jumlah?></h2>
                <h4>TOTAL </h4>
                <h2><?= $tot_harga?></h2> 
                <div class="tombol">
                <li><a href="<?= $lokasi ?>"><button>LANJUT</button></a></li>
                <li><button id="tidak">KEMBALI</button> </li>
                </div> 
            </div>
        </div>
<?php endif ?>

<!-- mengalihkan halaman ke whatsapp -->                       
<?php endif ?>

<!-- script foto.js -->
<script src="js/foto.js"></script>

<!-- script beli.js -->
<script src="js/beli.js"></script>


</body>
</html>