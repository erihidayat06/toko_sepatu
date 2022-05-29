<?php

$alamat = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.3389371721023!2d109.14974325799938!3d-6.929052498748409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb95530d3a3c1%3A0x8a605b0ab357ec9f!2sTAHU%20BAKSO%20DAN%20ERI%20CELL!5e0!3m2!1sid!2sid!4v1653611082084!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade';

// style about
$styleAbout = "
<style>
#about{
color: #ff5050;
 }
</style>";


$des_retro = '<p><span color="rgba(0, 0, 0, 0.8)" face="Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif" style="background-color: white; font-size: 14px; white-space: pre-wrap;">"lexa retro 1.0"</span></p><p><span color="rgba(0, 0, 0, 0.8)" face="Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif" style="background-color: white; font-size: 14px; white-space: pre-wrap;">Tema utama "lexa retro 1.0"</span><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">,</span><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">menggambarkan era masa lalu  </span><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">ketika para manusia </span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">menggunakan sepatu</span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">untuk berpergian ataupun bekerja.</span><span style="background-color: white; font-size: 14px; white-space: pre-wrap;"> untuk membawa imajinasi ke masa lalu lexa</span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">membuat produk pertamanya</span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">dengan sepatu seperti masa lalu</span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">degan model dan warna warna yang lebih modern.</span></p>';

$des_air = '<p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">lexa ingin dengan antusias mempersembahkan </span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">koleksi spesialnya dengan merilis koleksi " lexa air " kami.</span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;"> Lexa air hadir dengan model yang nyaman di pakai outdoor dan olahraga. </span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">lexa air mengandung perpaduan warna yang serasi </span></p><p><span style="background-color: white; font-size: 14px; white-space: pre-wrap;">dengan sentuhan elegan</span></p>';

// database untuk barang
$sepatu  = array(
    // lexa
    ["gambar"=>"lexa.jpg",
    "merek" => "Sepatu LEXA 1gc 5" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42"], 
    "des" => $des_retro],
    
    // lexa biru
    ["gambar"=>"lexa air biru.JPG",
    "merek" => "Sepatu lexa air 0.1 warna biru" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => $des_air],

    // lexa air kuning
    ["gambar"=>"lexa air kuning.jpg",
    "merek" => " Sepatu lexa air 0.1 warna kuning" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => $des_air],


    // lexa air merah
    ["gambar"=>"lexa air merah.jpg",
    "merek" => "Sepatu lexa air 1.0 warna merah" ,
    "harga"=> "500000",
    "ukuran" => ["36","37","38","39","40"], 
    "des" => $des_air],

    // lexa 
    ["gambar"=>"rertro biru muda.jpg",
    "merek" => "Sepatu lexa retro warna biru muda" ,
    "harga"=> "750000",
    "ukuran" => ["36","37","38","39","40"], 
    "des" => $des_retro],

    // retro biru hitam
    ["gambar"=>"retro biru hitam.jpg",
    "merek" => "Sepatu lexa retro warna biru hitam" ,
    "harga"=> "750000",
    "ukuran" => ["36","37","38","39","40","41","42","43"], 
    "des" => $des_retro],

    // Sepatu lexa retro hitam coklat
    ["gambar"=>"retro hitam coklat.jpg",
    "merek" => "Sepatu lexa retro warna hitam coklat" ,
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => $des_retro],

    // Sepatu lexa retro coklat
    ["gambar"=>"retro coklat.jpg",
    "merek" => "Sepatu lexa retro warna coklat",
    "harga"=> "750000",
    "ukuran" => ["39","40","41","42","43"], 
    "des" => $des_retro],
    
    // Sepatu lexa retro
    ["gambar"=>"retro grey.jpg",
    "merek" => "Sepatu lexa retro warna grey",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43","44"],
    "des" => $des_retro],

    // retro hijau
    ["gambar"=>"retro hijau.jpg",
    "merek" => "Sepatu lexa retro warna hijau",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => $des_retro],

    // retro biru
    ["gambar"=>"retro biru tua.jpg",
    "merek" => "Sepatu lexa retro warna biru tua",
    "harga"=> "750000",
    "ukuran" => ["39","40","41","42","43"],
    "des" => $des_retro],

    // retro hitam merah
    ["gambar"=>"retro hitam merah.jpg",
    "merek" => "Sepatu lexa retro warna hitam merah",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => $des_retro],

    // retro hitam putih
    ["gambar"=>"retro hitam putih.jpg",
    "merek" => "Sepatu lexa retro warna hitam putih",
    "harga"=> "750000",
    "ukuran" => ["38","39","40"],
    "des" => $des_retro],

    // retro hitam
    ["gambar"=>"retro hitam.jpg",
    "merek" => "Sepatu lexa retro warna hitam",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => $des_retro],

      // retro kuning
    ["gambar"=>"retro kuning.jpg",
    "merek" => "Sepatu lexa retro warna kunung",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => $des_retro],

      // retro merah hitam
    ["gambar"=>"retro merah hitam.jpg",
    "merek" => "Sepatu lexa retro warna merah hitam",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => $des_retro],


      // retro merah
    ["gambar"=>"retro merah.jpg",
    "merek" => "Sepatu lexa retro warna merah",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => $des_retro],

);

?>