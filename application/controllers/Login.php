<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_login'));
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['isi'] = 'member/login';
		$this->load->view('member/home',$data);
	}

	public function register()
	{
		$data['isi'] = 'member/register';
		$this->load->view('member/home',$data);
	}

	public function login_act()
	{

        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));
        $cekMember = $this->m_login->getMember($email, $password,1);
 
        if($cekMember->num_rows() == 1) {
         	foreach ($cekMember->result() as $c) {
                $data_user['member_login']          = 'berhasil';
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
