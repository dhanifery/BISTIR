
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="<?= base_url('assets/css/admin/tampil.css') ?>">
     </head>
     <body>
          <div class="recent-orders">
               <h2>List Peserta</h2>
               <div class="tambahdata">
                    <div class="row-input">
                         <div class="col">
                              <form action="<?php site_url('Crud_peserta') ?>" method="post">
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
                              <th>Name</th>
                              <th>Email</th>
                              <th>Jenis Kelamin</th>
                              <th>Image</th>
                              <th class="text-center">Option</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php if (empty($peserta)):?>
                              <tr>
                                   <td colspan="6" >
                                        <div class="alert">
                                             <h3>Data not found!</h3>
                                        </div>
                                   </td>
                              </tr>
                         <?php endif; ?>
                         <?php foreach ($peserta as $psr){
                              ?>
                              <tr>
                                   <th><?php echo ++$start?></th>
                                   <?php    $psr->id_peserta?>
                                   <td><?php echo $psr->username?></td>
                                   <td><?php echo $psr->email_peserta?></td>
                                   <td width="120px;"><?php echo $psr->JK_peserta?></td>
                                   <td width="80px;">
                                        <picture>
                                             <img style=" height: 60px; width:100%; border-radius:4px; border: 2px solid;" src="<?= base_url('assets/images/upload/'.$psr->image)?>">
                                        </picture>                                 
                                   </td>
                                   <td class="text-center" style="height: 5rem;">
                                        <a href="<?=site_url('Crud_peserta/edit/'.$psr->id_peserta) ?>" class="btn-edit">
                                             <span class="material-icons-sharp">edit</span>
                                        </a>
                                        <a href="<?=site_url('Crud_peserta/hapusPeserta/'.$psr->id_peserta) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
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
                         <h2>Form Peserta</h2>
                    </div>
                    <div class="modal-body">
                         <?php echo form_open_multipart('Crud_peserta/tambahPeserta') ?>
                         <form action=""  method="post">
                              <div class="form-group">
                                   <label>Name *</label>
                                   <input type="text" name="username" value"" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('username'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>TTL *</label>
                                   <input type="date" name="TTL_peserta" value"" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('TTL_peserta'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Email *</label>
                                   <input type="text" name="email_peserta" value="" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('email_peserta'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Alamat *</label>
                                   <textarea name="alamat_peserta" rows="2" cols="1"></textarea>
                              <span class="error-validasi"><?php echo form_error('alamat_peserta'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>No.telp *</label>
                                   <input type="text" name="no_telp" value=""  autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Image *</label>
                                   <input type="file" name="image" value=""  autocomplete="off">
                              </div>
                              <div class="form-group">
                                   <label>Jenis Kelamin *</label>
                                   <select name="JK_peserta">
                                        <option value="">- Pilih -</option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                   </select>
                                   <span class="error-validasi"><?php echo form_error('JK_peserta'); ?></span>
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
