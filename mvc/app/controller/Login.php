<?php 
class Login extends Controllers{
    public function index(){
        $this->view('login/index');
    }

    public function prosesLogin(){
       if( $this->model('Login_model')->login($_POST) != null){
        $vi2 = $this->model('Login_model')->login($_POST);
        $leve = $vi2['level'];
        if ($leve == "admin") {
          $_SESSION['status'] = 'login';
          header('location:'.BASEURL.'/home/index_admin'); 
        }else if ($leve == "petugas") {
            $_SESSION['status'] = 'login';
            header('location:'.BASEURL.'/home/index_petugas'); 
        }else{
           $_SESSION['status'] = 'login';
           header('location:'.BASEURL.'/home');
         }
       }else{
           $_SESSION['status'] = 'gagal';
           header('location:'.BASEURL);
       }
    }
}