<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
<?php

// mengambil nilai dari database.php
require "database/database.php";
$i = 0;
?>


<!-- jumbotron -->
<div class="jumbotron">
    <div class="container">
            <h1>SELAMAT DATANG</h1>
            <p>TOKO SEPATU <img src="img/logo.png" alt="" width="90px" height="20px"> OFFICIAL</p>
        <div class="border">
            

        </div>

    </div>
</div>

<div class="keterangan">
    <p>UNTUK KAMU</p>
</div>

<!-- barang -->
<div class="barang">

<!-- mengambil data barang -->
<?php foreach($sepatu as $spt):

    // menambahkan format . pada nomer harga
    $harga = $spt["harga"];
    $harga = number_format($harga,0,',','.')?>

    <!-- link akan menuju ke halaman detail atau ke halaman detail.php -->
    <a href="?page=detail&id=<?= $i ?>&merek=<?= $spt['merek'];?>">
    <div class="container">
        <img src="img/<?= $spt["gambar"]?>" alt="">
        <div class="conten">
            <p><?= $spt["merek"]?></p>
            <h5>Rp <?= $harga?></h5>
        </div>
    </div>
    </a>
    <?php $i++;?>
<?php
endforeach;
?>
</div>
<!-- akhir barang -->

<!-- footer -->
<div class="clear">
    <div class="footer">
        <div class="container">
            <div class="tentang-kami">
                <ul>
                    <b>TENTANG KAMI</b> 
                    <li>
                       <a href=""> About</a>
                    </li>
                </ul>
            </div>
            <div class="hubungi">
                <ul>
                    <b>HUBUNGI KAMI</b>
                    <li>
                       <a href="">Facebook</a> 
                    </li>
                    <li>
                       <a href="">Instagram</a> 
                    </li>
                    <li>
                       <a href="">Whatsapp</a> 
                    </li>
                </ul>
            </div>
            <div class="clear">
            <div class="alamat">
                
                <ul>
                <b>ALAMAT</b>
               
                    <li>
                    <iframe src= "<?= $alamat ?>"></iframe>
                    </li>
                </ul>
            </div>
            </div>
            <div class="clear">
            <ul>
            <p>&copy 2022 kelompok 4</p>
            </ul>
            </div>
        </div>  
    </div>
</div>
<!-- akhir footer -->

</body>
</html>