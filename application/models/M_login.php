<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
  
    public function tampil()
    {
    	 return $this->db->get('barang');
    }

    public function getMember($email, $password){
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }

}