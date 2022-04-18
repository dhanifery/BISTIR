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
                         <form action="<?= site_url('Crud_admin/proses') ?>"  method="post">
                              <div class="form-group">
                                   <label>Name *</label>
                                   <input type="hidden" name="id" value="<?= $row->id ?>">
                                   <input type="text" name="name" value="<?= $row->name ?>" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('name'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>email *</label>
                                   <input type="text" name="email" value="<?= $row->email ?>" autocomplete="off" autofocus>
                              </div>
                              <div class="form-group">
                                   <label>New Password *</label>
                                   <input type="password" name="password" value="" autocomplete="off" autofocus>
                                   <span class="error-validasi"><?php echo form_error('password'); ?></span>
                              </div>
                              <div class="form-group">
                                   <label>Image *</label>
                                   <input type="file" name="image" value="<?= $row->image ?>" autocomplete="off" autofocus>
                              </div>
                              <div class="form-group">
                                   <input type="submit" name="<?=$page?>" value="Save">
                              </form>
                         </div>
                    </div>
                    <div class="img">
                         <img src="<?= base_url('assets/images/undraw_push_notifications_re_t84m.svg');?> " alt="">
                    </div>
               </div>
          </div>
     </body>
</html>

               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
