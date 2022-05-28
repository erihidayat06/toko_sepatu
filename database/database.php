<?php

$alamat = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.3389371721023!2d109.14974325799938!3d-6.929052498748409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb95530d3a3c1%3A0x8a605b0ab357ec9f!2sTAHU%20BAKSO%20DAN%20ERI%20CELL!5e0!3m2!1sid!2sid!4v1653611082084!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade';

// style about
$styleAbout = "
<style>
#about{
color: #ff5050;
 }
</style>";

// database untuk barang
$sepatu  = array(
    // lexa
    ["gambar"=>"lexa.jpg",
    "merek" => "Sepatu LEXA 1gc 5" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42"], 
    "des" => '<p>&nbsp;<span style="background-color: white; color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">KETERANGAN PRODUK</span></p><span style="background-color: white; color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">- size/ukuran 31-43
    - kualitas terbaik dan terjamin 
    - Sol PVC
    - terbuat dari bahan rajut import terbaik pilihan yang di lengkapi dengan outsol yang ringan nyaman dan tidak licin sehingga nyaman sa.at di pakai

    KELENGKAPAN
    - PAKING RAPI DAN AMAN

    Catatan
    - welcome reseller/dropshipper silahkan bergabung🤗

    🤗🙏bee smart buying🤗 terimakasih kaki</span>'],
    
    // lexa biru
    ["gambar"=>"lexa air biru.JPG",
    "merek" => "Sepatu lexa air 0.1 warna biru" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => ''],

    // lexa air kuning
    ["gambar"=>"lexa air kuning.jpg",
    "merek" => " Sepatu lexa air 0.1 warna kuning" ,
    "harga"=> "500000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => '<p><span style="background-color: white; color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">READY STOCK,
    SEPATU VANS OLDSKOOL
    
    DESKRIPSI PRODUK
    *Model           : vans old skool
    *Warna            : hitam putih classic
    *Status stock : SELALU READY
    __________________________________________________
    *DETAIL UKURAN SEPATU VANS OLD SKOOL:
    36= 23 cm
    37=23.5 cm
    38= 24 cm
    39= 25 cm
    40= 25,5 cm
    41= 26,5 cm
    42= 27 cm
    43= 28 cm
    *DISARANKAN menaikan 1 ukuran dari ukuran sepatu yg biasa kamu pakai
    #vans #sepatuvans #vansoldskool #vansoldschool #vanshitam #vansoriginal #vansori #vanspremium #vansimport #vansblack #vanswhite #oldskool #vansputih #vansgradeori #vansgradeoriginal #sepatusekolah #vanscowok #vanscewek</span></p>'],


    // lexa air merah
    ["gambar"=>"lexa air merah.jpg",
    "merek" => "Sepatu lexa air 1.0 warna merah" ,
    "harga"=> "500000",
    "ukuran" => ["36","37","38","39","40"], 
    "des" => '<p><span style="background-color: white; color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">Sebelum Melakukan pemesanan, Mohon untuk baca dulu ya, karena kami tidak berharap untuk mengecewakan pelanggan kami. Selama barang masih ada postingannya berarti stock produk tersebut ready, jadi bisa di order lansung. Untuk pemesanan jika ada pilihan opsi warna dimohon untuk mencantumkan keterangan warna dan opsi jika warna kosong atau (Hubungi CS). Terima Kasih

    bahan sintetis 
    
    warna :                                                                                                                                                                                                                  - putih pink                                                                                                                                                                                                           - putih abu                                                                                                                                                                                                                - putih kuning                                                                                                                                                                                                           - putih hitam
    
    ukuran 36-40
    36=23cm
    37 = 23,5 cm
    38 = 24 cm
    39 = 24,5 cm
    40 = 25 c
     
    Tinggi sol 5 cm 
    
    MOHON DI PERHATIKAN (MEMBELI = SETUJU)                                                                                                                                  1. Pesanan sudah kami QC baik jumlah maupun kualitas                                                                                                                     2. Kerusakan/kehilangan paket dlm pengiriman diluar tanggung jawab kami                                                                                3. Di tunggu order berikutnya ajakin temen dan keluarga ya!                                                                                                             4. Tidak menerima complain kurang barang tanpa ada bukti video pada saat membuka paket
    5. No return no complain (kecuali salah variasi)
    6.*SARAN ; HARAP NAIKAN 1 SIZE DARI UKURAN YANG DI PAKAI
    6. Cek Kembali UKURAN SEPATU, WARNA, VARIASI ,ALAMAT, DAN NAMA sebelum memesan 
    
    Terima kasih.
    
    ~~&gt;&gt;&gt;&gt; Kepuasan pelanggan adalah tujuan utama kami &lt;&lt;&lt;&lt;~~                                                                                                           ~~&gt;&gt;&gt;&gt;&gt;&gt; Terima Kasih Atas Kunjungan Anda &lt;&lt;&lt;&lt;&lt;&lt;~~
    
    
    #sepatukasual #sepatufashion
    #sneakerswanita #sneakerspria 
    #sneakerscewek #sneakerscowok 
    #sneakers #sepatu #sepatufashion
    #sepatumurah #sepatuimport #sepatuoriginal </span></p>'],

    // lexa 
    ["gambar"=>"rertro biru muda.jpg",
    "merek" => "Sepatu lexa retro warna biru muda" ,
    "harga"=> "750000",
    "ukuran" => ["36","37","38","39","40"], 
    "des" => ''],

    // retro biru hitam
    ["gambar"=>"retro biru hitam.jpg",
    "merek" => "Sepatu lexa retro warna biru hitam" ,
    "harga"=> "750000",
    "ukuran" => ["36","37","38","39","40","41","42","43"], 
    "des" => ''],

    // Sepatu lexa retro hitam coklat
    ["gambar"=>"retro hitam coklat.jpg",
    "merek" => "Sepatu lexa retro warna hitam coklat" ,
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"], 
    "des" => ''],

    // Sepatu lexa retro coklat
    ["gambar"=>"retro coklat.jpg",
    "merek" => "Sepatu lexa retro warna coklat",
    "harga"=> "750000",
    "ukuran" => ["39","40","41","42","43"], 
    "des" => ''],
    
    // Sepatu lexa retro
    ["gambar"=>"retro grey.jpg",
    "merek" => "Sepatu lexa retro warna grey",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43","44"],
    "des" => ''],

    // retro hijau
    ["gambar"=>"retro hijau.jpg",
    "merek" => "Sepatu lexa retro warna hijau",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => ''],

    // retro biru
    ["gambar"=>"retro biru tua.jpg",
    "merek" => "Sepatu lexa retro warna biru tua",
    "harga"=> "750000",
    "ukuran" => ["39","40","41","42","43"],
    "des" => ''],

    // retro hitam merah
    ["gambar"=>"retro hitam merah.jpg",
    "merek" => "Sepatu lexa retro warna hitam merah",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => ''],

    // retro hitam putih
    ["gambar"=>"retro hitam putih.jpg",
    "merek" => "Sepatu lexa retro warna hitam putih",
    "harga"=> "750000",
    "ukuran" => ["38","39","40"],
    "des" => ''],

    // retro hitam
    ["gambar"=>"retro hitam.jpg",
    "merek" => "Sepatu lexa retro warna hitam",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => ''],

      // retro kuning
    ["gambar"=>"retro kuning.jpg",
    "merek" => "Sepatu lexa retro warna kunung",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => ''],

      // retro merah hitam
    ["gambar"=>"retro merah hitam.jpg",
    "merek" => "Sepatu lexa retro warna merah hitam",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42"],
    "des" => ''],


      // retro merah
    ["gambar"=>"retro merah.jpg",
    "merek" => "Sepatu lexa retro warna merah",
    "harga"=> "750000",
    "ukuran" => ["38","39","40","41","42","43"],
    "des" => ''],

);

?>