 <!-- Begin Page Content -->
 <div class="container-fluid">
     <?= $this->session->flashdata('flash'); ?>
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Produk</h1>
     </div>

     <!-- Content Row -->

     <div class="row">

         <!-- Area Chart -->
         <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
                     <a href="<?= base_url() ?>admin/tambahProduk" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Produk</a>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Judul</th>
                                     <th>Sub Title</th>
                                     <th>Link</th>
                                     <th>foto</th>
                                     <th>aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($produk as $p) :
                                    ?>
                                     <tr>
                                         <td><?= $no++; ?></td>
                                         <td><?= $p['title_produk']; ?></td>
                                         <td><?= $p['sub_title']; ?></td>
                                         <td><?= $p['link']; ?></td>
                                         <td><img src="<?= base_url('assets/images/') ?>produk/<?= $p['image']; ?>" alt="" width="80"></td>
                                         <td>
                                             <a href="<?= base_url() ?>admin/editProduk/<?= $p['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                             <a href="<?= base_url() ?>admin/hapusProduk/<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus foto?')"><i class="fas fa-trash"></i></a>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </div>
 <!-- /.container-fluid -->