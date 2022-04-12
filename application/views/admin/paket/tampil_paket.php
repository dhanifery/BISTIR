
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="<?= base_url('assets/css/admin/tampil.css') ?>">
     </head>
     <body>
          <div class="recent-orders">
               <h2><?= $subjudul; ?></h2>
               <div class="tambahdata">
                    <div class="row-input">
                         <div class="col">
                              <form action="<?php site_url('User') ?>" method="post">
                                   <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                                        <input type="submit" name="Search" value="Search">
                                   </div>
                              </form>
                         </div>
                    </div>
                    <button  id="modalBtn" class="button" >Tambah Data</button>
               </div>

               <table>
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Nama Paket</th>
                              <th>Harga</th>
                              <th>Banyak Pertemuan</th>
                              <th class="text-center">Option</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php if (empty($paket)):?>
                              <tr>
                                   <td colspan="6" >
                                        <div class="alert">
                                             <h3>Data not found!</h3>
                                        </div>
                                   </td>
                              </tr>
                         <?php endif; ?>
                         <?php foreach ($paket as $p){
                              ?>
                              <tr>
                                   <td><?php echo ++$start?></td>
                                   <td><?= $p['nama']; ?></td>
                                   <td><?= $p['harga']; ?></td>
                                   <td><?= $p['byk_pertemuan']; ?></td>
                                   <td class="text-center">
                                        <a href="<?=site_url('Paket/edit/'.$p['id']) ?>" class="btn-edit">
                                             <span class="material-icons-sharp">edit</span>
                                        </a>
                                        <a href="<?=site_url('Paket/hapus/'.$p['id']) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
                                             <span class="material-icons-sharp">delete</span>
                                        </a>
                                   </td>

                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
               <h3>Results : <?=$total_rows; ?></h3>
          </div>
          <?php echo $this->pagination->create_links();  ?>
          <!-- RECENT ORDERS END -->

          <!-- MODAL START -->
          <div id="simpleModal" class="modal">
               <div class="modal-content">
                    <div class="modal-header">
                         <span class="btnClose">&times;</span>
                         <h2>Form Paket</h2>
                    </div>
                    <div class="modal-body">
                         <?php echo form_open_multipart('Paket/tambahPaket') ?>
                         <form action=""  method="post">
                              <div class="form-group">
                                   <label>Nama Paket *</label>
                                   <input type="text" name="nama" value"" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('nama'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Harga *</label>
                                   <input type="text" name="harga" value"" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('harga'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Banyak Pertemuan *</label>
                                   <input type="text" name="byk_pertemuan" value="" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('byk_pertemuan'); ?></span>
                              </div>
                              <div class="form-group">
                                   <input type="submit" name="" value="Save">
                                   <input type="reset" name="" value="Reset">
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                    <?php echo form_close() ?>
               </div>
          </div>

     </body>
</html>
                    <!-- MODAL END -->

               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
