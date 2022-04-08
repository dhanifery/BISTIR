<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- HEAD START -->
     <head>
          <meta charset="utf-8">
          <title>B I S T I R</title>
          <!-- MATERIAL CDN -->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
          <!-- CSS -->
          <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
     </head>
<!-- HEAD END -->
     <body>
          <div class="container">
               <!-- aside start -->
               <aside>
                    <div class="top">
                         <div class="logo">
                              <img src="<?= base_url('assets/images/logo.png') ?>">
                              <h2>BI<span class="danger">-STIR</span></h2>
                         </div>
                         <div class="close" id="close-btn">
                              <span class="material-icons-sharp">close</span>
                         </div>
                    </div>
                    <div class="sidebar">
                         <p>Home</p>
                         <a href="#"><span class="material-icons-sharp">grid_view</span>
                              <h3>Dashboard</h3>
                         </a>
                         <p>Master Data</p>
                         <a href="#" class="active"><span class="material-icons-sharp">person_outline</span>
                              <h3>Costumer</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">receipt_long</span>
                              <h3>Orders</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">insights</span>
                              <h3>Anaytics</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">mail_outline</span>
                              <h3>Messages</h3>
                              <span class="message-count">20</span>
                         </a>
                         <a href="#"><span class="material-icons-sharp">inventory</span>
                              <h3>Products</h3>
                         </a>
                         <p>Data Transaksi</p>
                         <a href="#"><span class="material-icons-sharp">report_gmailerrorred</span>
                              <h3>Reports</h3>
                         </a>
                         <a href="#"><span class="material-icons-sharp">add</span>
                              <h3>Add Product</h3>
                         </a>
                         <p>Pengaturan</p>
                         <a href="#"><span class="material-icons-sharp">settings</span>
                              <h3>Setting</h3>
                         </a>
                         <a href="<?= base_url('Auth/logout');?>"><span class="material-icons-sharp">logout</span>
                              <h3>Logout</h3>
                         </a>
                    </div>
               </aside>
               <!-- aside end -->

               <!-- MAIN START -->
               <main>
                    <h1>Dashboard</h1>

                    <!-- INSIGHTS START -->
                    <div class="insights">
                         <!-- SALES START -->
                         <div class="sales">
                              <span class="material-icons-sharp">analytics</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Sales</h3>
                                        <h1>$25,024</h1>
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
                              <span class="material-icons-sharp">bar_chart</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Expenses</h3>
                                        <h1>$14,168</h1>
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
                              <span class="material-icons-sharp">stacked_line_chart</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Income</h3>
                                        <h1>$10,864</h1>
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
                    <h2>Course Schedule</h2>
                    <table>
                         <thead>
                              <tr>
                                   <th>Product Name</th>
                                   <th>Product Number</th>
                                   <th>Payment</th>
                                   <th>Status</th>
                                   <th></th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <td>Foldable Mini Drone</td>
                                   <td>85631</td>
                                   <td>Due</td>
                                   <td class="warning">Pending</td>
                                   <td class="primary">Details</td>
                              </tr>
                              <tr>
                                   <td>Foldable Mini Drone</td>
                                   <td>85631</td>
                                   <td>Due</td>
                                   <td class="warning">Pending</td>
                                   <td class="primary">Details</td>
                              </tr>
                              <tr>
                                   <td>Foldable Mini Drone</td>
                                   <td>85631</td>
                                   <td>Due</td>
                                   <td class="warning">Pending</td>
                                   <td class="primary">Details</td>
                              </tr>
                              <tr>
                                   <td>Foldable Mini Drone</td>
                                   <td>85631</td>
                                   <td>Due</td>
                                   <td class="warning">Pending</td>
                                   <td class="primary">Details</td>
                              </tr>
                              <tr>
                                   <td>Foldable Mini Drone</td>
                                   <td>85631</td>
                                   <td>Due</td>
                                   <td class="warning">Pending</td>
                                   <td class="primary">Details</td>
                              </tr>
                         </tbody>
                    </table>
                    <a href="#">Show All</a>
               </div>
                    <!-- RECENT ORDERS END -->
               </main>
               <!-- MAIN END -->

               <!-- RIGHT SIDE START-->
               <div class="right">

                    <!-- START OF TOP -->
                    <div class="top">
                         <button id="menu-btn">
                              <span class="material-icons-sharp">menu</span>
                         </button>
                         <div class="theme-toggler">
                              <span class="material-icons-sharp active">light_mode</span>
                              <span class="material-icons-sharp">dark_mode</span>
                         </div>
                         <div class="profile">
                              <div class="info">
                                   <p>Hey, <b>Daniel</b></p>
                                   <small class="text-muted">Admin</small>
                              </div>
                              <div class="profile-photo">
                                   <img src="<?= base_url('assets/images/profile-1.jpg') ?>">
                              </div>
                         </div>
                    </div>
                    <!-- END OF TOP -->

                    <!-- START OF RECENT UPDATES -->
                    <div class="recent-updates">
                         <h2>Date time</h2>
                         <div class="updates">
                              <div class="content_kalender">
                                <div class="calendar">
                                  <div class="calendar-header">
                                      <span class="month-picker" id="month-picker">February</span>
                                      <div class="year-picker">
                                          <span class="year-change" id="prev-year">
                                              <pre><</pre>
                                          </span>
                                          <span id="year">2021</span>
                                          <span class="year-change" id="next-year">
                                              <pre>></pre>
                                          </span>
                                      </div>
                                  </div>
                                  <div class="calendar-body">
                                        <div class="calendar-week-day">
                                          <div>Sun</div>
                                          <div>Mon</div>
                                          <div>Tue</div>
                                          <div>Wed</div>
                                          <div>Thu</div>
                                          <div>Fri</div>
                                          <div>Sat</div>
                                      </div>
                                      <div class="calendar-days">
                                  </div>
                                  <div class="calendar-footer"></div>
                                  <div class="month-list"></div>
                              </div>
                              </div>
                            </div>
                         </div>
                    </div>
                    <!-- END OF RECENT UPDATES -->

                    <!-- SALES ANALYTICS START -->
                    <!-- <div class="sales-analytics">
                         <h2>Sales Analytics</h2>
                         <div class="item online">
                              <div class="icon">
                                   <span class="material-icons-sharp">shopping_cart</span>
                              </div>
                              <div class="right">
                                   <div class="info">
                                        <h3>ONLINE ORDERS</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                   </div>
                                   <h5 class="success">+39%</h5>
                                   <h3>1100</h3>
                              </div>
                         </div>
                         <div class="item offline">
                              <div class="icon">
                                   <span class="material-icons-sharp">local_mall</span>
                              </div>
                              <div class="right">
                                   <div class="info">
                                        <h3>OFFLINE ORDERS</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                   </div>
                                   <h5 class="danger">-17%</h5>
                                   <h3>1100</h3>
                              </div>
                         </div>
                         <div class="item costumers">
                              <div class="icon">
                                   <span class="material-icons-sharp">person</span>
                              </div>
                              <div class="right">
                                   <div class="info">
                                        <h3>NEW COSTUMER</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                   </div>
                                   <h5 class="danger">+25%</h5>
                                   <h3>849</h3>
                              </div>
                         </div>
                         <div class="item add-product">
                              <div >
                                   <span class="material-icons-sharp">add</span>
                                   <h3>Add Product</h3>
                              </div>
                         </div>
                    </div> -->
                    <!-- SALES ANALYTICS END -->

               </div>
               <!-- RIGHT SIDE END -->
          </div>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script  src="<?= base_url('assets/js/index.js') ?>"></script>
     </body>
</html>
