<?php
$model = new Kategori();
$data_kategori = $model->dataKategori();


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">User ID</th>
                  
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no =1;
                   foreach ($data_kategori as $kategori){
                    ?>
                     <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $kategori['nama_kategori']?></td>
                    <td><?= $kategori['deskripsi']?></td>
                    <td><?= $kategori['user_id']?></td>
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

 