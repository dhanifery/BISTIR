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
                         <form action="<?= site_url('Crud_instruktur/proses') ?>"  method="post">
                              <div class="form-group">
                                   <label>Nama *</label>
                                   <input type="hidden" name="id_instr" value="<?= $row->id_instr ?>">
                                   <input type="text" name="username" value="<?= $row->username ?>" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('username'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>TTL *</label>
                                   <input type="date" name="TTL_instr" value="<?php echo $row->TTL_instr ?>">
                              </div>
                              <div class="form-group">
                                   <label>Email *</label>
                                   <input type="text" name="email_instr" value="<?php echo $row->email_instr ?>" autocomplete="off">
                              </div>
                              <div class="form-group">
                                   <label>Alamat *</label>
                                   <textarea  name="alamat_instr" rows="2" cols="1" ><?php echo $row->alamat_instr; ?></textarea>
                              </div>
                              <div class="form-group">
                                   <label>No.telp *</label>
                                   <input type="text" name="telp_instr" value="<?php echo $row->telp_instr?>" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('telp_instr'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>honor per jam *</label>
                                   <input type="text" name="honor_per_jam" value="<?php echo $row->honor_per_jam ?>" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('honor_per_jam'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Jenis Kelamin </label>
                                   <select name="JK_instr">
                                        <?php $JK_instr= $row->JK_instr ? $psr->JK_instr  : $row->$JK_instr   ?>
                                        <option value="Male"> - Male - </option>
                                        <option value="Female"<?php=$JK_instr == Female ? 'selected' : null ?>Female</option>
                                   </select>
                                   <span class="error-validasi"><?php echo form_error('JK_instr'); ?></span>
                              </div>
                              <div class="form-group">
                                   <input type="submit" name="<?=$page?>" value="Save">
                              </form>
                         </div>
                    </div>
                    <div class="gambar">
                         <img src="<?= base_url('assets/images/undraw_teaching_re_g7e3.svg');?> " alt="">
                    </div>
               </div>
          </div>
     </body>
</html>

               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
