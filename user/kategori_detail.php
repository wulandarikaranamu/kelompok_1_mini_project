<?php 
$id = $_REQUEST['id'];
$model = new Kategori();
$produk = $model->dataKategori($id);

?>

<section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

          <!-- Card with an image on left -->
          <div class="card mb-4">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $kategori['id']?></h5>
                  <p class="card-text"><?= $kategori['nama']?></p>
                </div>
              </div>
            </div>
          </div><!-- End Card with an image on left -->

        </div>

      </div>
    </section>