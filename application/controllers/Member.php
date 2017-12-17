<?php

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_sandi'));
		$this->load->library(array('form_validation','session','image_lib'));
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
		$sandimasuk = $this->input->post('sandi');
		$sandi    	= $this->session->userdata('session_sandi');
		$email    	= $this->session->userdata('member_email');  

        if ($email==NULL) {
        	if ($sandimasuk == 'Morse') {
        		$data['sandi'] = $this->m_sandi->getSandiMorse()->row();
        		$data['isi'] = 'member/login';
				$this->load->view('member/home',$data);
        	}else{
        		$data['sandi'] = $this->m_sandi->getSandiSemaphore()->row();
        		$data['isi'] = 'member/login';
				$this->load->view('member/home',$data);
        	}
        }else {
        	if (($sandi == 'Morse') || ($sandimasuk == 'Morse')) {
        		$data['sandi'] = $this->m_sandi->getSandiMorse()->row();
        		$data['isi'] = 'member/fitur';
				$this->load->view('member/home',$data);
        	}else if(($sandi == 'Semaphore') || ($sandimasuk == 'Semaphore')){
        		$data['sandi'] = $this->m_sandi->getSandiSemaphore()->row();
        		$data['isi'] = 'member/fitur';
				$this->load->view('member/home',$data);
        	}
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
