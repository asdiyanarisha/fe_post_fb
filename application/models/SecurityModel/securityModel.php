<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class securityModel extends CI_Model {

	public function getSecurity()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('login/login');
		}
	}
}