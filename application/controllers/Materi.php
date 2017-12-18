<?php

class Materi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('m_sandi'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$email    = $this->session->userdata('member_email');  
           
        if ($email==NULL) {
            redirect('login'); 
        }else {
        	$data['sandi'] = $this->m_sandi->getAktifSandi()->row();
        	$data['isi'] = 'member/materi';
			$this->load->view('member/home',$data);
        }

	}

}
