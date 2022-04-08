
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
                         </div>
                    </div>
                    <button  id="modalBtn" class="button" >Tambah Data</button>
               </div>

               <table>
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Member Sejak</th>
                              <th class="text-center">Option</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         foreach ($anggota as $a){
                              ?>
                              <tr>
                                   <th scope="row"><?= $i++; ?></th>
                                   <td><?= $a['name']; ?></td>
                                   <td><?= $a['email']; ?></td>
                                   <td><?= date('d F Y', $a['date_created']); ?></td>
                                   <td class="text-center">
                                        <a href="<?=site_url('Crud_admin/edit/'.$a['id']) ?>" class="btn-edit">
                                             <span class="material-icons-sharp">edit</span>
                                        </a>
                                        <a href="<?=site_url('Crud_admin/hapus/'.$a['id']) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
                                             <span class="material-icons-sharp">delete</span>
                                        </a>
                                   </td>

                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
          <!-- RECENT ORDERS END -->

          <!-- MODAL START -->
          <div id="simpleModal" class="modal">
               <div class="modal-content">
                    <div class="modal-header">
                         <span class="btnClose">&times;</span>
                         <h2>Form Peserta</h2>
                    </div>
                    <div class="modal-body">
                         <?php echo form_open_multipart('Crud_admin/tambahadmin') ?>
                         <form action=""  method="post">
                              <div class="form-group">
                                   <label>Name *</label>
                                   <input type="text" name="name" value"" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('name'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>email *</label>
                                   <input type="email" name="email" value"" autocomplete="off">
                              </div>
                              <div class="form-group">
                                   <label>Password*</label>
                                   <input type="password" name="password" value="" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('password'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Image *</label>
                                   <input type="file" name="image" value=""  autocomplete="off">
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
