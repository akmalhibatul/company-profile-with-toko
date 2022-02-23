 <!-- Begin Page Content -->
 <div class="container-fluid">

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
                     <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
                     <a href="<?= base_url() ?>admin/produk" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm">Kembali</a>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body">
                     <form method="post" action="<?= base_url() ?>admin/updateProduk" enctype="multipart/form-data" class="needs-validation" novalidate>
                         <input type="text" name="id" value="<?= $produk['id']; ?>" hidden>
                         <div class="col-md-12 mb-2">
                             <div class="form-group">
                                 <label for="validationCustom04">Title Produk :</label>
                                 <input type="text" name="title_produk" class="form-control" id="validationCustom04" value="<?= $produk['title_produk']; ?>" required>
                                 <?= form_error('title_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                             </div>
                         </div>
                         <div class="col-md-12 mb-2">
                             <div class="form-group">
                                 <label for="validationCustom04">Sub Tile :</label>
                                 <input type="text" name="sub_title" class="form-control" id="validationCustom04" value="<?= $produk['sub_title']; ?>" required>
                                 <?= form_error('sub_title', '<small class="text-danger pl-3">', '</small>'); ?>
                             </div>
                         </div>
                         <div class="col-md-12 mb-2">
                             <div class="form-group">
                                 <label for="validationCustom04">Link :</label>
                                 <input type="text" name="link" class="form-control" id="validationCustom04" value="<?= $produk['link']; ?>" required>
                                 <?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
                             </div>
                         </div>
                         <div class="col-md-12 mb-2">
                             <div class="form-group row">
                                 <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Image</label>
                                 <div class="col-sm-5">
                                     <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/images/produk/') ?><?= $produk['image']; ?>" width="200" /></div>
                                     <input type="file" class="file" name="image">
                                     <input type="hidden" name="old_image" value="<?= $produk['image']; ?>">
                                     <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 5mb</small>
                                     <div class="upload-img-thumb"><span class="img-prop"></span></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col">
                             <button class="btn btn-primary" type="submit">Simpan</button>
                             <button class="btn btn-danger" type="reset">Reset</button>
                         </div>

                     </form>
                 </div>
             </div>
         </div>

     </div>

 </div>
 <!-- /.container-fluid -->