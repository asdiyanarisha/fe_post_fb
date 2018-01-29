<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccessTokenController extends CI_Controller{
    public function index() {
        $this->securityModel->getSecurity();
        $field['content'] = "widget/accesstoken";
        $this->load->view('main', $field);
    }
    public function getStatus(){
        $type = $this->input->get('type');
        $this->load->model('TokenModel/tokenModel');
        $result = $this->tokenModel->getStatus($type);
        echo json_encode($result);
    }

    public function getToken() {
        $key = $this->input->post('data');
        $id = $this->input->post('id');
        $data = array(
            'key' => $key
                );
        $this->db->where('id', $id);
        $query = $this->db->update('token', $data);
//        $q = json_decode($query,TRUE);
//        file_put_contents("e:/data.txt", print_r($q, True));
//        if ($error['code'] == "0"){
//            print_r('YES');
//            return False;
//        } else {
//            return True;
//        }
    }
}