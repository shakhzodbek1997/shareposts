<?php  
  class Users extends Controller{
    public function __construct(){
       
    }
    public function register(){
      // Check fro POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process Form

      }else{
        // Init Data
        $data = [
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_pass_err' => ''
        ];

        // Load view
        $this->view('users/register', $data);
      }
    }
  }
?>