<?php
$model = new Pertanyaan();
$data_pertanyaan = $model->dataPertanyaan();


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pertanyaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Pertanyaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p></p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Hasil Pertanyaan</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no =1;
                   foreach ($data_pertanyaan as $pertanyaan){
                    ?>
                     <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $pertanyaan['nama_gejala']?></td>
                    <td><?= $pertanyaan['hasil_pertanyaan']?></td>
                  </tr>
                  <?php
                   $no ++;
                    }
                   ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 