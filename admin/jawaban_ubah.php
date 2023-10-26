<?php

$objKategori = new Kategori();
$rs = $objKategori->dataKategori();

$objUser = new User();
$rs = $objUser->dataUser();

//--------awal edit data-------------------
//tangkap request idedit di url
$idedit = $_REQUEST['idedit'];
$objJawaban = new Jawaban(); // Perbaikan pada nama objek
if (!empty($idedit)) { //modus ubah / hapus data lama
    $row = $objJawaban->getJawaban($idedit);
} else { //modus entry data baru
    $row = array();
}
//--------akhir edit data--------------------
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<main id="main" class="main">

<div class="pagetitle">
  <h1>Jawaban</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Jawaban</li>
      <li class="breadcrumb-item active">Form Jawaban</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
    <div class="card mb-4">
      


      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p></p>

<h4 align="center">Update Jawaban</h4>
<form action="jawaban_controller.php" method="POST">
  
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Masukkan Gejala</label> 
    <div class="col-8">
      <input id="text1" name="gejala" placeholder="Isi Gejala" type="text" class="form-control" value="<?= $row['gejala']; ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Masukkan Keluhan</label> 
    <div class="col-8">
      <input id="text2" name="keluhan" placeholder="Isi Keluhan" type="text" class="form-control" value="<?= $row['keluhan']; ?>" />
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Masukkan Deskripsi/Penjelasan</label> 
    <div class="col-8">
      <input id="text3" name="deskripsi" placeholder="Isi Deskripsi/Penjelasan" type="text" class="form-control" value="<?= $row['deskripsi']; ?>" />
    </div>
  </div>
 
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text4" name="user_id" placeholder="Isi Deskripsi/Penjelasan" type="text" class="form-control" value="<?= $row['nama_user']; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
      <input id="text5" name="kategori_id" placeholder="Isi Deskripsi/Penjelasan" type="text" class="form-control" value="<?= $row['nama_kategori']; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Jawaban</label> 
    <div class="col-8">
      <input id="text6" name="jawaban" placeholder="Isi Jawaban" type="text" class="form-control" value="<?= $row['jawabani']; ?>" />
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->