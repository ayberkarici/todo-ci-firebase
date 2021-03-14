<?php

class acount extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}

    public function registerpage()
    {
        $this->load->view('register');
    }

    public function loginpage()
    {
        $this->load->view('login');
    }

    public function taskpage()
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

    public function process()
    {
        echo 'soon';
    }



	
}
