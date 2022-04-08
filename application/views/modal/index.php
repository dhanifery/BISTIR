<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title>Modal</title>
          <link rel="stylesheet" href="<?= base_url('assets/css/modal.css'); ?>">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
     </head>
     <body>
          <button  id="modalBtn" class="button">Click Here</button>
          <div id="simpleModal" class="modal">
               <div class="modal-content">
                    <div class="modal-header">
                         <span class="closeBtn">&times;</span>
                         <h2>Modal Header</h2>
                    </div>
                    <div class="modal-body">
                         <p>halo I am a Modal</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                         nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                         fficia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="modal-footer">
                         <h3>Modal Footer</h3>
                    </div>
               </div>
          </div>
          <script src="<?= base_url('assets/js/main.js'); ?>"></script>
     </body>
</html>
