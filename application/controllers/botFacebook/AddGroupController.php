<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddGroupController extends CI_Controller{
    public function index(){
        $this->securityModel->getSecurity();
        $field['content'] = "widget/addfbgroup";
        $this->load->view('main', $field);
    }
}
