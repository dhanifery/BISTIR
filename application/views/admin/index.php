

               <!-- INSIGHTS START -->
               <div class="insights">
                    <!-- SALES START -->
                    <div class="sales">
                         <a href="<?= base_url('User'); ?>"> <span class="material-icons-sharp">group</span></a>
                         <div class="middle">
                              <div class="left">
                                   <h3>Jumlah User</h3>
                                   <h1><?= $this->ModelUser->cekData(['role_id'])->num_rows(); ?></h1>
                              </div>
                              <div class="progress">
                                   <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                   </svg>
                                   <div class="number">
                                        <p>81%</p>
                                   </div>
                              </div>
                         </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>

                    <!-- SALES END -->

                    <!-- EXPENSES START -->
                    <div class="expenses">
                         <a href="<?= base_url('Transaksi'); ?>"><span class="material-icons-sharp">analytics</span></a>
                         <div class="middle">
                              <div class="left">
                                   <h3>Scan Data</h3>
                                   <h1><?= $this->ModelTransaksi->cekData(['id_trans'])->num_rows(); ?></h1>
                              </div>
                              <div class="progress">
                                   <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                   </svg>
                                   <div class="number">
                                        <p>62%</p>
                                   </div>
                              </div>
                         </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <!-- EXPENSES END -->

                    <!-- INCOME START -->
                    <div class="income">
                         <a href="<?= base_url('Jadwal'); ?>"><span class="material-icons-sharp">directions_car</span></a>
                         <div class="middle">
                              <div class="left">
                                   <h3>Schedule</h3>
                                   <h1><?= $this->ModelJadwal->cekData(['id_jadwal'])->num_rows(); ?></h1>
                              </div>
                              <div class="progress">
                                   <svg>
                                        <circle cx='38' cy='38' r='36'></circle>
                                   </svg>
                                   <div class="number">
                                        <p>44%</p>
                                   </div>
                              </div>
                         </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                    <!-- INCOME END -->

               </div>
               <!-- INSIGHTS END -->

               <!-- RECENT ORDERS START -->
               <div class="recent-orders">
               <h2><?= $subjudul; ?></h2>
               <div class="tambahdata">
                    <div class="row-input">
                         <div class="col">
                              <form action="<?php site_url('Jadwal') ?>" method="post">
                                   <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                                        <input type="submit" name="Search" value="Search">
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>

               <table>
                    <thead>
                         <tr>
                         <th>No</th>
                         <th>Kode Jadwal</th>
                         <th>Nama Instruktur</th>
                         <th>Nama Peserta</th>
                         <th>Status</th>
                         <th class="text-center">Option</th>
                         </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($jadwal)) {?>
                              <tr>
                                   <td colspan="6" >
                                        <div class="alert">
                                             <h3>Data not found!</h3>
                                        </div>
                                   </td>
                              </tr> 
                         <?php } else { ?>
                         <?php foreach($row->result() as $key => $data) { ?>
                         <tr>
                              <td><?php echo ++$start?></td>
                              <td><?php echo $data->kode_jadwal?></td>
                              <td><?php echo $data->instr_name?></td>
                              <td><?php echo $data->peserta_name?></td>
                              <td><?php echo $data->status_nama?></td>
                              <td class="text-center">
                                   <a href="<?=site_url('Jadwal/edit/'.$data->id_jadwal) ?>" class="btn-edit">
                                        <span class="material-icons-sharp">edit</span>
                                   </a>
                              </td>
                         </tr>
                        <?php } ?>
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
                    <!-- RECENT ORDERS END -->
               </main>
               <!-- MAIN END -->
               <!-- RIGHT SIDE START-->
