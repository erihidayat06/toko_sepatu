var body = document.getElementById("body");
var foto = document.getElementById("foto");
var kembali = document.getElementById("kembali");
var gambar = document.getElementById("gambar");

// Fungsi agar foto muncul saat di clik
gambar.onclick = function () {
  foto.style.display = "block";
  kembali.style.display = "block";
  body.style.overflow = "hidden";
};

// fungsi agar foto hilang saat di klik id kembali
kembali.onclick = function () {
  foto.style.display = "none";
  kembali.style.display = "none";
  body.style.overflow = "auto";
};
