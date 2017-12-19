<?php

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_sandi','m_member'));
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
		$email    	= $this->session->userdata('member_email');
		//abcd  
		if ($sandimasuk == 'Morse') {
			$idSandi = 2;
			$data1['sandi'] = 'Semaphore';
			$data1['status'] = 'tidak';
			$this->m_sandi->updateAktifStatus($idSandi,$data1);
			$idSandi = 1;
			$data2['sandi'] = 'Morse';
			$data2['status'] = 'aktif';
			$this->m_sandi->updateAktifStatus($idSandi,$data2);
		}else if($sandimasuk == 'Semaphore'){
			$idSandi = 1;
			$data1['sandi'] = 'Morse';
			$data1['status'] = 'tidak';
			$this->m_sandi->updateAktifStatus($idSandi,$data1);
			$idSandi = 2;
			$data2['sandi'] = 'Semaphore';
			$data2['status'] = 'aktif';
			$this->m_sandi->updateAktifStatus($idSandi,$data2);
		}

        if ($email==NULL) {
			redirect('login');
        }else {
        	$data['sandi'] = $this->m_sandi->getAktifSandi()->row();
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
			$data['member'] = $this->m_member->getData_member($email)->row();
			$data['isi'] = 'member/profile';
			$this->load->view('member/home',$data);
        }

	}

	public function edit_profil(){
		$email    = $this->session->userdata('member_email');  

		if($this->input->post('simpan')){
			$data['namaMember'] = $this->input->post('nama');
			$data['tglLahir'] = $this->input->post('tanggal');
			$data['statusPendidikan'] = $this->input->post('status');
			$this->m_member->ubah_member($email, $data);
			$this->session->set_flashdata('info', 'Data berhasil diubah');
			redirect('member/fitur/profil/ubah');
		}
		else 
		{
			$data['member'] = $this->m_member->getData_member($email)->row();
			$data['isi'] = 'member/edit_profile';
			$this->load->view('member/home',$data);
		}
	}

	public function edit_foto(){
		$email    = $this->session->userdata('member_email');  

		if($this->input->post('simpan')){

		}
		else 
		{
			$data['member'] = $this->m_member->getData_member($email)->row();
			$data['isi'] = 'member/edit_foto';
			$this->load->view('member/home',$data);
		}
	}

	function logout()
    {
            $this->session->sess_destroy();         
            redirect('','refresh');
    }

}
