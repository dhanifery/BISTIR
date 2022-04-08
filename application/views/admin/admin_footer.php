
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
                    <p>Hey, <b><?= $user['name']; ?></b></p>
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
</div>
<!-- RIGHT SIDE END -->
</div>
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script  src="<?= base_url('assets/js/index.js') ?>"></script>
     <script  src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>
