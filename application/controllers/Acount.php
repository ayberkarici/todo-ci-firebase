<?php

class Acount extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}

    public function registerPage()
    {
        $this->load->view('register');
    }

    public function loginPage()
    {
        $this->load->view('login');
    }

    public function taskPage()
    {   
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $data = array(
            'email'=> $email,
            'password' => $password
        );

        $viewData = $this->session->set_userdata($data);

        $this->load->view('tasks');
        
    }

    public function session()
    {   
        print_r($this->session->userdata());

    }



	
}
