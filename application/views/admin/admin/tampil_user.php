
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
                              <th>Username</th>
                              <th>Email</th>
                              <th>Member Sejak</th>
                              <th>Role Id</th>
                              <th class="text-center">Option</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php if (empty($anggota)):?>
                              <tr>
                                   <td colspan="6" >
                                        <div class="alert">
                                             <h3>Data not found!</h3>
                                        </div>
                                   </td>
                              </tr>
                         <?php endif; ?>
                         <?php foreach ($anggota as $a){
                              ?>
                              <tr>
                                   <td><?php echo ++$start?></td>
                                   <td><?= $a['name']; ?></td>
                                   <td><?= $a['email']; ?></td>
                                   <td><?= date('d F Y', $a['date_created']); ?></td>
                                   <td><?= $a['role_id']; ?></td>
                                   <td class="text-center">
                                        <a href="<?=site_url('User/edit/'.$a['id']) ?>" class="btn-edit">
                                             <span class="material-icons-sharp">edit</span>
                                        </a>
                                        <a href="<?=site_url('User/hapus/'.$a['id']) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
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
                         <h2><?= $form; ?></h2>
                    </div>
                    <div class="modal-body">
                         <?php echo form_open_multipart('User/tambahuser') ?>
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
                                   <label>Role Id *</label>
                                   <input type="text" name="role_id" value="" autocomplete="off">
                                   <span class="error-validasi"><?php echo form_error('role_id'); ?></span>
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
