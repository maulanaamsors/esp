<?php

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['isi'] = 'member/index';
		$this->load->view('member/home',$data);
	}

	public function fitur()
	{
		$email    = $this->session->userdata('member_email');  
            
        if ($email==NULL) {
            redirect('login'); 
        }else {
        	$data['isi'] = 'member/fitur';
			$this->load->view('member/home',$data);
        }

	}

	public function profil()
	{
		$email    = $this->session->userdata('member_email');  
            
        if ($email==NULL) {
            redirect('login'); 
        }else {
        	$data['isi'] = 'member/profile';
			$this->load->view('member/home',$data);
        }

	}

	function logout()
    {
            $this->session->sess_destroy();         
            redirect('','refresh');
    }

}
