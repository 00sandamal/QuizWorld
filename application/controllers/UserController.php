<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Login()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('usermodel');
			$data = $this->usermodel->loginUser($email,$password);
			echo json_encode($data);
		}
	}

	public function Register()
	{
        $json_payload = $this->input->raw_input_stream;
        $data = json_decode($json_payload, TRUE);

		$this->load->model('usermodel');
		$this->usermodel->reisterUser($data);
	}
}
