<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    public function index(){
//        $this->load->view('main'); 
        $this->load->view('/login/login');
    }
    public function getLogin(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('LoginModel/loginModel');
        $this->loginModel->getlogin($user,$pass);
    }
}