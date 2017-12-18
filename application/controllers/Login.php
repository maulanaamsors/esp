<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_login','m_sandi','m_member'));
		$this->load->library(array('form_validation','session','image_lib'));
		$this->load->helper('url');
	}
	
	public function index()
	{
		$sandi = $this->input->post('sandi');

		if ($sandi == 'Morse') {
			$data['sandi'] = $this->m_sandi->getSandiMorse()->row();
			$data['isi'] = 'member/login';
			$this->load->view('member/home',$data);			 
		}else{
			$data['sandi'] = $this->m_sandi->getSandiSemaphore()->row();
			$data['isi'] = 'member/login';
			$this->load->view('member/home',$data);	
		}


	}	

	public function register()
	{
        	$receiver_email = $this->input->post('email');
           	$cekMember   = $this->m_member->getData_Member($receiver_email);

            if ($cekMember->num_rows() == 1 ) {
                    $this->session->set_flashdata('peringatan', 'Email Sudah Digunakan');
                    redirect('login/register');
                    break;
            } 

            if ($this->input->post('simpanregister')) {
                    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
                    $this->form_validation->set_rules('email', 'Email', 'required|trim');
                    $this->form_validation->set_rules('password', 'Password', 'required|trim');
                    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
                    $this->form_validation->set_rules('status', 'Status Pendidikan', 'required|trim');

                    if ($this->form_validation->run() === FALSE) {
                        $data['isi'] = 'member/register';
                        $this->load->view('member/home',$data);
                    }
                    else {
                        $query = $this->m_member->tambah_member();

                        if ($query) {
                            $this->session->set_flashdata('info', 'Anda berhasil menambahkan akun');
                            redirect('login/register');
                        }
                	}
                } 
                else {
					$data['isi'] = 'member/register';
					$this->load->view('member/home',$data);	
                } 
    }

	public function login_act()
	{
		$sandi      = $this->input->post('sandi');

        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));
        $cekMember  = $this->m_login->getMember($email, $password,1);
 
        if($cekMember->num_rows() == 1) {
         	foreach ($cekMember->result() as $c) {
                $data_user['session_sandi'] 		= $sandi;
                $data_user['member_email']          = $c->email;
                $data_user['member_nama']           = $c->namaMember;
                
                $this->session->set_userdata($data_user);
                redirect('member/fitur');
            }
        }else{
            $data['isi'] = 'member/login';
			$this->load->view('member/home',$data); 
        }
         
	}
}
