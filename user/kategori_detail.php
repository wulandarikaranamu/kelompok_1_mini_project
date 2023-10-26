<?php
$id = $_REQUEST['id'];
$model = new Kategori();
$produk = $model->dataKategori($id);

?>

<section class="py-5">
  <div class="cotainer px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-6 align-items-center">
      <div class="col md-6">
        <div class="card mb-3">
          <!-- <img src="./assets/img/card.jpg" class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title"><?= $kategori['id'] ?>id</h5>
            <p class="card-text"><?= $kategori['nama'] ?>Nama</p>
            <button type="button" class="btn btn-sm btn-info"><a href="index.php?url=kategori">Kembali</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>