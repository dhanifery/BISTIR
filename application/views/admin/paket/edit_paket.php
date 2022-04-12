<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="<?= base_url('assets/css/admin/edit.css') ?>">
     </head>
     <body>
          <div class="recent-orders">
               <h2><?= $subjudul ?></h2>
               <div class="edit-form">
                    <div class="form-input">
                         <form action="<?= site_url('Paket/proses') ?>"  method="post">
                              <div class="form-group">
                                   <label>Nama Paket *</label>
                                   <input type="hidden" name="id" value="<?= $row->id ?>">
                                   <input type="text" name="nama" value="<?= $row->nama ?>" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('nama'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Harga *</label>
                                   <input type="text" name="harga" value="<?= $row->harga ?>" autocomplete="off" autofocus>
                              </div>
                              <div class="form-group">
                                        <label>Banyak Pertemuan *</label>
                                   <input type="text" name="byk_pertemuan" value="<?= $row->byk_pertemuan ?>" autocomplete="off" autofocus>

                              </div>
                              <div class="form-group">
                                   <input type="submit" name="<?=$page?>" value="Save">
                              </form>
                         </div>
                    </div>
                    <div class="gambar">
                         <img src="<?= base_url('assets/images/undraw_futuristic_interface_re_0cm6.svg');?> " alt="">
                    </div>
               </div>
          </div>
     </body>
</html>

               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
