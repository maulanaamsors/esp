<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_sandi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
  
    public function tampil()
    {
    	 return $this->db->get('barang');
    }

    public function getSandiMorse(){
        $this->db->select('*');
        $this->db->from('sandi');
        $this->db->where('sandi', 'Morse');
        $query = $this->db->get();
        return $query;
    }

    public function getSandiSemaphore(){
        $this->db->select('*');
        $this->db->from('sandi');
        $this->db->where('sandi', 'Semaphore');
        $query = $this->db->get();
        return $query;
    }
	
}
