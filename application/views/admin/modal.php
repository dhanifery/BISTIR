<div id="simpleModal" class="modal">
     <div class="modal-content">
          <div class="modal-header">
               <span class="btnClose">&times;</span>
               <h2>Form Peserta</h2>
          </div>
          <div class="modal-body">
               <?php echo form_open_multipart('Crud/tambahPeserta') ?>
               <form action=""  method="post">
                    <div class="form-group">
                         <label>Name *</label>
                         <input type="text" name="username" value"" autocomplete="off" autofocus>
                         <span class="error-validasi"><?php echo form_error('username'); ?></span>
                    </div>
                    <div class="form-group">
                         <label>TTL *</label>
                         <input type="date" name="TTL_peserta" value"" autocomplete="off">
                    </div>
                    <div class="form-group">
                         <label>Email *</label>
                         <input type="text" name="email_peserta" value="" autocomplete="off">
                    </div>
                    <div class="form-group">
                         <label>Alamat *</label>
                         <textarea name="alamat_peserta" rows="2" cols="1"></textarea>
                    </div>
                    <div class="form-group">
                         <label>No.telp *</label>
                         <input type="text" name="no_telp" value=""  autocomplete="off">
                         <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
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

<div id="editModal" class="modal">
     <div class="modal-content">
          <div class="modal-header">
               <span class="btnClose">&times;</span>
               <h2>Form Peserta</h2>
          </div>
          <div class="modal-body">
               <?php echo form_open_multipart('Crud/editPeserta/'.$psr->id_peserta) ?>
               <div class="form-input">
                 <?php foreach ($peserta as $psr) { ?>
                   <form action=""  method="post">
                    <div class="form-group">
                       <label>Name *</label>
                       <input type="hidden" name="id_peserta" value="<?php echo $psr->id_peserta ?>">
                       <input type="text" name="username" value="<?php echo $psr->username ?>"  autocomplete="off">
                       <span class="error-validasi"><?php echo form_error('username'); ?></span>
                    </div>
                    <div class="form-group">
                       <label>TTL *</label>
                       <input type="date" name="TTL_peserta" value="<?php echo $psr->TTL_peserta ?>">
                    </div>
                    <div class="form-group">
                       <label>Email *</label>
                       <input type="text" name="email_peserta" value="<?php echo $psr->email_peserta ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                       <label>Password </label>
                       <input type="password" name="password_peserta" value="<?php echo $psr->password_peserta ?>">
                       <span class="error-validasi"><?php echo form_error('password_peserta'); ?></span>
                    </div>
                    <div class="form-group">
                       <label>Alamat *</label>
                       <textarea  name="alamat_peserta" rows="2" cols="1" ><?php echo $psr->alamat_peserta; ?></textarea>
                    </div>
                    <div class="form-group">
                       <label>No.telp *</label>
                       <input type="text" name="no_telp" value="<?php echo $psr->no_telp ?>" autocomplete="off">
                       <span class="error-validasi"><?php echo form_error('no_telp'); ?></span>
                    </div>
                    <div class="form-group">
                       <label>Jenis Kelamin </label>
                       <select name="JK_peserta">
                         <?php $JK_peserta= $psr->JK_peserta ? $psr->JK_peserta  : $psr->$JK_peserta   ?>
                         <option value="Male">Male</option>
                         <option value="Female"<?php=$JK_peserta == Female ? 'selected' : null ?>Female</option>
                       </select>
                       <span class="error-validasi"><?php echo form_error('JK_peserta'); ?></span>
                    </div>
                    <div class="form-group">
                       <input type="submit" name="" value="Save">
                    </div>
                   </form>
                 <?php } ?>
               </div>
          </div>
          <div class="modal-footer">
          </div>
          <?php echo form_close() ?>
     </div>
</div>
