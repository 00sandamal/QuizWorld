<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function index()
	{
		$this->load->model('quizmodel');
		$this->data['quizzes'] = $this->quizmodel->getQuizes();
		$this->load->view('home',$this->data);
	}

	public function Register()
	{
		$this->load->view('register');
	}

	public function Login()
	{
		$this->load->view('login');
	}
}
