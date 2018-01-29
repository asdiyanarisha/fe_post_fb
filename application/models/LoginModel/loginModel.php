<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

	public function getlogin($user,$pass)
	{
		$pwd=md5($pass);
		$this->db->where('username',$user);
		$this->db->where('password',$pwd);
		$query=$this->db->get('user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array(
					'username' => $row->username,
					'foto' => $row->foto
					);
				$this->session->set_userdata($sess);
				redirect('HomeController');
			}
		}
		else
		{
			$this->session->set_flashdata('info', 'Maaf Username atau Password salah');
			redirect('/login/login');
		}
	}
}