<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function index() {
        $field['content'] = 'widget/frontwidget';
        $this->securityModel->getSecurity();
        $this->load->view('main', $field);
    }
}