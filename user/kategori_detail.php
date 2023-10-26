<?php
$id = $_REQUEST['id'];
$model = new Kategori();
$produk = $model->dataKategori($id);

?>

<main id="main" class="main">
  <!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $kategori['id'] ?></h5>
            <p class="card-text"><?= $kategori['nama'] ?></p>
            <form>
              <a href="index.php?url=kategori">
                <button type="button" class="btn btn-info btn-sm">Kembali</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>