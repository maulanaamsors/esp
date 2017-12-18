<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_member extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

    public function tambah_member(){
        $namaMember = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $tanggal = $this->input->post('tanggal');
        $status = $this->input->post('status');
        $statusOnline = 'Tidak';
        $jk = '-';
        $foto ='';              
        
        $object = array(
             'namaMember' => $namaMember,
             'jk' 		  => $jk,
             'email'      => $email,
             'password'   => md5($password),
             'statusPendidikan'   => $status,
             'tglLahir'   => $tanggal,
             'statusOnline'   => $statusOnline,
             'foto'   => $foto,
        );

        return $this->db->insert('member', $object);     
    }

    function getData_Member($email){
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query;
    }
	

}
