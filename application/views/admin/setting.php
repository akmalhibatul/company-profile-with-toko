<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('flash'); ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting</h1>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Setting</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="post" action="<?= base_url() ?>admin/updateSetting" enctype="multipart/form-data" novalidate>


                        <div class="form-group row">
                            <input type="hidden" name="id" value="<?= $setting['id']; ?>">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Logo</label>
                            <div class="col-sm-5">
                                <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/images/') ?><?= $setting['image_logo']; ?>" width="200" /></div>
                                <input type="file" class="file" name="image_logo">
                                <input type="hidden" name="old_image_logo" value="<?= $setting['image_logo']; ?>">
                                <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                                <div class="upload-img-thumb"><span class="img-prop"></span></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">About Image</label>
                            <div class="col-sm-5">
                                <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/images/') ?><?= $setting['image_about']; ?>" width="200" /></div>
                                <input type="file" class="file" name="image_about">
                                <input type="hidden" name="old_image_about" value="<?= $setting['image_about']; ?>">
                                <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                                <div class="upload-img-thumb"><span class="img-prop"></span></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Footer Image</label>
                            <div class="col-sm-5">
                                <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/images/') ?><?= $setting['image_footer']; ?>" width="200" /></div>
                                <input type="file" class="file" name="image_footer">
                                <input type="hidden" name="old_image_footer" value="<?= $setting['image_footer']; ?>">
                                <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                                <div class="upload-img-thumb"><span class="img-prop"></span></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Sub Judul</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="sub_judul_atas" rows="5"><?= $setting['sub_judul_atas']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Judul</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="judul" rows="5"><?= $setting['judul']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Sub Judul</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="sub_judul_bawah" rows="5"><?= $setting['sub_judul_bawah']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Title About</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="title_about" rows="5"><?= $setting['title_about']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Sub Title About</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="sub_title_about" rows="5"><?= $setting['sub_title_about']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Isi About</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="isi_about" rows="5"><?= $setting['isi_about']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Isi Footer</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="isi_footer" rows="5"><?= $setting['isi_footer']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" name="alamat" rows="5"><?= $setting['alamat']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-5">
                                <button type="submit" name="submit" id="btn-submit" value="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->