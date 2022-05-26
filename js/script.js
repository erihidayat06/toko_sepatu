var pilih = document.querySelectorAll("input[name='ukuran']");
var result = document.getElementById("result");

// membuat fungsi untuk merubah texcontten / isi teks
var memilih = () => {
  var selected = document.querySelector("input[name='ukuran']:checked").value;
  result.textContent = "| Ukuran - " + selected;
};

// agar ketika di change maka nilai memilih akan di tambahkan
pilih.forEach((pilih) => {
  pilih.addEventListener("change", memilih);
});
