

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
            echo $_GET['merek'];
        }else {
            echo "Halaman Tidak Ditemukan";
        } 
        ?>
    </title>
    
    <!-- style CSS -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<div class="nav">
    <div class="container">
        <div class="waiper">
            <div class="logo">
                <h1>TOKSEP</h1>
            </div>
            <ul>
                <li><a href="?page=home" class="aktiv">home</a></li>
                <li><a href="?page=about">about</a></li>
                <li class="lokasi"><a href=""><img src="img/lokasi.png" alt=""></a></li>
            </ul>
    </div>
</div>
</div>

<!-- class container untuk isi halaman -->
<div class="container">

<!--  -->



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

</body>
</html>