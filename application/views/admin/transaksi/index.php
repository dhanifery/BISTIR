
          <div class="recent-orders">
               <h2><?= $subjudul;?></h2>
               <div class="hero">
                        <div class="btn-box">
                                <button id="btn1" onclick="openHTML()"><span class="material-icons-sharp">insights</span>Transaksi</button>
                                <button id="btn2" onclick="openCSS()"><span class="material-icons-sharp">paid</span>Lunas</button>
                                <button id="btn3" onclick="openJS()"><span class="material-icons-sharp">money_off</span>Pending</button>
                        </div>
                        <div id="content1" class="content">
                                <div class="content-left">
                                        <div class="col">
                                                <form action="<?php site_url('Jadwal') ?>" method="post">
                                                        <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                                                                <input type="submit" name="Search" value="Search">
                                                        </div>
                                                </form>
                                        </div>
                                        <table>
                                                <thead>
                                                        <tr>
                                                        <th>No</th>
                                                        <th>Kode Jadwal</th>
                                                        <th>Nama Peserta</th>
                                                        <th>Metode Pembayaran</th>
                                                        <th>Status</th>
                                                        <th class="text-center">Option</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (empty($trans)) {?>
                                                <tr>
                                                        <td colspan="6" >
                                                                <div class="alert">
                                                                <h3>Data not found!</h3>
                                                                </div>
                                                        </td>
                                                </tr> 
                                                <?php } else { ?>
                                                <?php foreach($row->result() as $key => $data ) { ?>
                                                <tr>
                                                        <td><?php echo ++$start?></td>
                                                        <td><?php echo $data->jadwal_kode?></td>
                                                        <td><?php echo $data->peserta_name?></td>
                                                        <td><?php echo $data->nama_pembayaran?></td>
                                                        <td><?php echo $data->status_nama?></td>
                                                        <td class="text-center">
                                                                <a href="<?=site_url('Transaksi/edit/'.$data->id_trans) ?>" class="btn-edit">
                                                                        <span class="material-icons-sharp">edit</span>
                                                                </a>
                                                                <a href="<?=site_url('Transaksi/hapusTrans/'.$data->id_trans) ?>" onclick="return confirm('Apakah anda yakin ?')" class="btn-hapus">
                                                                        <span class="material-icons-sharp">delete</span>
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
                        </div>
                        <div id="content2" class="content">
                                <div class="content-left">
                                        <h1><?= $judul?></h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                        Inventore voluptatibus, at sint praesentium maxime dolorum 
                                        repellat tempore quam non animi? Rem voluptatem quidem eius 
                                        reiciendis sunt temporibus consequatur cum iusto.</p>
                                </div>
                        </div>
                        <div id="content3" class="content">
                                <div class="content-left">
                                        <h1><?= $judul?></h1>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                        Inventore voluptatibus, at sint praesentium maxime dolorum 
                                        repellat tempore quam non animi? Rem voluptatem quidem eius 
                                        reiciendis sunt temporibus consequatur cum iusto.</p>
                                </div>
                        </div>
                </div>
          </div>
     
        </main>
