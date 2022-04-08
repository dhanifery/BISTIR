
<body>
     <div class="container">
          <div class="forms-container">
               <div class="signin-signup">
                    <form action="<?= base_url('Auth/Proses');?>" method="post" class="sign-in-form">
                         <img class="profil" src="<?= base_url('assets/images/profil/undraw_profile.svg') ?>">
                         <h2 class="title">Sign in</h2>
                         <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="email" placeholder="Email" id="email" name="email" autocomplete="off" value="<?= set_value('email');?>"/>
                         </div>
                         <span class="error-validasi"><?php echo form_error('email'); ?></span>
                         <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" id="password" name="password"/>
                         </div>
                         <span class="error-validasi"><?php echo form_error('password'); ?></span>
                         <input type="submit" name="submit" class="btn solid" />
                    </form>

                    <form action="<?= base_url('Auth/registrasi');?>" method="post"  class="sign-up-form">
                         <img class="profil" src="<?= base_url('assets/images/profil/undraw_profile.svg') ?>">
                         <h2 class="title">Sign up</h2>
                         <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="Username" name="email" autocomplete="off"/>
                         </div>
                         <div class="input-field">
                              <i class="fas fa-envelope"></i>
                              <input type="email" placeholder="Email" name="email" autocomplete="off" />
                         </div>
                         <span class="error-validasi"><?php echo form_error('email'); ?></span>
                         <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" name="password" />
                         </div>
                         <span class="error-validasi"><?php echo form_error('password'); ?></span>
                         <input type="submit" class="btn" value="Sign up" />
                    </form>
               </div>
          </div>

          <div class="panels-container">
               <div class="panel left-panel">
                    <div class="content">
                         <h3>Daftar akun?</h3>
                         <p>
                              Silahkan registrasi dengan klik tombol dibawah ini
                         </p>
                         <button class="btn transparent" id="sign-up-btn">
                              SIGN UP
                         </button>
                    </div>
                    <img src="<?= base_url('assets/images/profil/undraw_off_road_-9-oae.svg') ?>" class="image" alt="" />
               </div>
               <div class="panel right-panel">
                    <div class="content">
                         <h3>Sudah mempunyai akun ?</h3>
                         <p>
                              Silahkan Login dengan klik tombol dibawah ini
                         </p>
                         <button class="btn transparent" id="sign-in-btn">
                              Sign in
                         </button>
                    </div>
                    <img src="<?= base_url('assets/images/profil/undraw_programming_re_kg9v (1).svg') ?>" class="image" alt="" />
               </div>
          </div>
     </div>
