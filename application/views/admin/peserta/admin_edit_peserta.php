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
                    <div class="gambar">
                         <img src="<?= base_url('assets/images/upload/'.$row->image)?>" alt="">
                         <div class="deskripsi">
                              <h2><?=$row->username ?></h2>
                              <p><?=$row->email_peserta ?></p>
                         </div>
                    </div>
                    <div class="form-input">

                         <?php echo form_open_multipart('Crud_peserta/proses') ?>
                         <form action=""  method="post">
                              <div class="form-group">
                                   <label>Nama *</label>
                                   <input type="hidden" name="id_peserta" value="<?= $row->id_peserta ?>">
                                   <input type="text" name="username" value="<?= $row->username ?>" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('username'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>TTL *</label>
                                   <input type="date" name="TTL_peserta" value="<?php echo $row->TTL_peserta ?>">
                              </div>
                              <div class="form-group">
                                   <label>Alamat *</label>
                                   <textarea  name="alamat_peserta" rows="2" cols="1" ><?php echo $row->alamat_peserta; ?></textarea>
                              </div>
                              <div class="form-group">
                                   <label>No.telp *</label>
                                   <input type="text" name="no_telp" value="<?php echo $row->no_telp ?>" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Image *</label>
                                   <input type="file" name="image" value="" autocomplete="off">
                                   <span></span>             
                              </div>
                              <div class="form-group">
                                   <label>Jenis Kelamin </label>
                                   <select name="JK_peserta">
                                        <?php $JK_peserta= $row->JK_peserta ? $psr->JK_peserta  : $row->$JK_peserta   ?>
                                        <option value="Male"> - Male - </option>
                                        <option value="Female"<?=$JK_peserta == 'Female' ? 'selected' : null ?><p>- Female -</p></option>
                                   </select>
                                   <span class="error-validasi"><?php echo form_error('JK_peserta'); ?></span>
                              </div>
                              <div class="form-group">
                                   <input type="submit" name="<?=$page?>" value="Save">                      
                              </div>
                              </form>
                              <?php echo form_close() ?>   
                    </div>
               </div>
          </div>
     </body>
</html>

               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
