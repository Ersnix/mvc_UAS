<?php 
class Home extends Controllers{
    public function index(){
        $this->view('home/index');
    }
    public function index_admin(){
    	$this->view('home/index_admin');
    }
    public function index_petugas(){
    	$this->view('home/index_petugas');
    }



    public function logout(){
        unset($_SESSION['status']);
        header('location:'.BASEURL);
    }
}