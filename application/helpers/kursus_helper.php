<?php
function is_logged_in()
{
     $ci = get_instance();
     if (!$ci->session->userdata('email')) {
          redirect('Auth');
     }else {
          $role_id = $ci->session->userdata('role_id');
     }
}
