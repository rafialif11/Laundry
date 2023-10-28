<?php

class login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->view('login');
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function proses()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth_model->login_user($username,$password))
		{
			redirect('home');
		}
		else{
			$this->session->set_flashdata('error','username & password salah');
			redirect('login');
		}
}

public function logout()
{
	$this->session->unset_userdata('username');
	$this->session->unset_userdata('nama');
	$this->session->unset_userdata('is_login');
	redirect('login');
}
}