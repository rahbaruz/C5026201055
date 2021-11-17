<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>C_5026201055_C (UTS)</title>
</head>

<body>
  <div class="container">
    <div class="row my-3">
      <div class="col-sm-12">
        <h4>Rahbar Uzma Taswirul Afkar</h4>
        <h4>Rahbar</h4>
        <h4>5026201055</h4>
      </div>
    </div>
    <div class="row mb-3 mt-5">
      <div class="col-sm-12 text-center">
        <h1>Form Input Peminjaman Buku</h1>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="judulBuku" class="col-sm-2 col-form-label">Judul Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="judulBuku">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="noBuku" class="col-sm-2 col-form-label">No Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="noBuku" onkeypress="return onlyNumberKey(event)" maxlength="5">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jenisPeminjaman" class="col-sm-2 col-form-label">Jenis Peminjaman</label>
      <div class="col-sm-10">
        <select name="jenisPeminjaman" id="jenisPeminjaman" class="form-select">
          <option value="Biasa">Biasa</option>
          <option value="Kilat">Kilat</option>
          <option value="Lama">Lama</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tanggalPeminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggalPeminjaman">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col-sm-12 text-center">
        <button type="button" class="btn btn-primary" onclick="validate()">Simpan</button>
        <button type="button" class="btn btn-success" onclick="reset()">Reset</button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

<script>
  function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
  }

  function validate() {
    var judulBuku = document.getElementById('judulBuku').value;
    var noBuku = document.getElementById('noBuku').value;
    var jenisPeminjaman = document.getElementById('jenisPeminjaman').value;
    var tanggalPeminjaman = document.getElementById('tanggalPeminjaman').value;

    if (judulBuku === "" || noBuku === "" || jenisPeminjaman === "" || tanggalPeminjaman === "") {
      alert("Semua isian harus diisi.");
    }else{
      if(noBuku.length == 5){
        if(judulBuku.length >= 10){
          var panjang_hari = 3;
          if(jenisPeminjaman == "Kilat"){
            panjang_hari = 1;
          }else if(jenisPeminjaman == "Lama"){
            panjang_hari = 7;
          }
          alert(
            "Selamat.. Anda berhasil meminjam buku.\n\n" + 
            "Judul Buku : " + judulBuku + "\n" + 
            "No. Buku : " + noBuku + "\n" + 
            "Jenis Peminjaman : " + jenisPeminjaman + " (" + panjang_hari + " Hari)\n" + 
            "Tanggal Peminjaman : " + changeDays(tanggalPeminjaman) + "\n" +
            "Tanggal Pengembalian : " + addDays(tanggalPeminjaman, panjang_hari)
          );
        }else{
          alert("Panjang judul buku minimal 10 karakter.");
        }
      }else{
        alert("Panjang nomor buku harus 5 digit.");
      }
    }
  }

  function reset() {
    document.getElementById('judulBuku').value("");
    document.getElementById('noBuku').value("");
    document.getElementById('jenisPeminjaman').value("");
    document.getElementById('tanggalPeminjaman').value("");
  }

  function addDays(date, days) {
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var result = new Date(date);
    result.setDate(result.getDate() + days);
    const [month, day, year] = [monthNames[result.getMonth()], result.getDate(), result.getFullYear()];
    return day + " " + month + " " + year;
  }

  function changeDays(date) {
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var result = new Date(date);
    const [month, day, year] = [monthNames[result.getMonth()], result.getDate(), result.getFullYear()];
    return day + " " + month + " " + year;
  }
</script>
</body>

</html>