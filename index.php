<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Percabangan di gunakan agar judul menyesuaikan halaman -->
    <title>
        <?php
        @$p = $_GET['page'];

        if ($p == 'home') {
            echo "Pusat toko sepatu";
        }elseif($p == 'about'){
            echo "Tentang kami";
        }elseif($p == 'detail'){
            if (isset($_GET['merek'])) {
                echo $_GET['merek'];
            }else{
                echo "Barang Tidak Ditemukan";
            }
            
        }else {
            echo "Pusat toko sepatu";
        } 
        ?>
    </title>
    
    <!-- style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<!-- Awal Navbar -->
<div class="nav">
    <div class="container">
        <div class="waiper">
            <div class="logo">
                <a href="?page=home"><img src="img/logo.png" alt=""></a>
            </div>
            <ul>
                <li><a href="?page=home" class="aktiv">home</a></li>
                <li><a href="?page=about" id="about">about</a></li>
                <li class="lokasi"><a target="_blank" href="https://goo.gl/maps/r5PYXZARUXJ3q43t9"><img src="img/lokasi.png" alt=""></a></li>
            </ul>
    </div>
</div>
</div>

<!-- Akhie Navbar -->


<!-- class container untuk isi halaman -->
<div class="container">

    <!-- include halaman  -->
    <?php
    require "database/database.php";
    @$page = $_GET['page'];
    if (!empty($page)) {
       switch ($page) {
           case 'home':
               include "page/home.php";
               break;

               case 'about':
                include "page/about.php";
                echo $styleAbout;
                break;
               case 'detail':
                include "page/detail.php";
                break;
           
           default:
                include "page/home.php";
               break;
       }
    }else{
        include "page/home.php";
    }
    
    
    ?>
     
</div>

<!-- Akhir isi halaman -->

</body>
</html>