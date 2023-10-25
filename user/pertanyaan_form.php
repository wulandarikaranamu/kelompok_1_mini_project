<?php  

$obj_pertanyaan = new pertanyaan();
$obj_Form = new form_pertanyaan();

$data_pertanyaan = $obj_pertanyaan->dataPertanyaan();
$data_form = $obj_Form->dataForm();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<main id="main" class="main">

<div class="pagetitle">
  <h1>Pertanyaan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Form Pertanyaan</li>
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

<h4 align="center">Form Pertanyaan</h4>
<form action="Pertanyaan_conctroller.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Masukkan Pertanyaan</label> 
    <div class="col-8">
      <input id="text1" name="hasil_pertanyaan" placeholder="Isi Pertanyaan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Gejala</label> 
    <div class="col-8">
      <input id="text" name="gejala" placeholder="Isi gejala" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Deskripsi Gejala</label> 
    <div class="col-8">
      <input id="text2" name="deskripsi" placeholder="Isi harga beli Produk" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nama Kategori</label> 
    <div class="col-8">
      <input id="text3" name="harga_jual" placeholder="Isi harga jual Produk" type="text" class="form-control">
    </div>
 
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Kategori</label> 
    <div class="col-8">
      <select id="select" name="jenis_produk" class="custom-select">
        <option value="rabbit">--- Pilih Jenis Produk ---</option>
        <?php foreach( $data_jenis as $jenis ) : ?>
        <option value="<?= $jenis['id'] ?>"><?= $jenis['nama'] ?></option>
        <?php endforeach; ?>
      </select>
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