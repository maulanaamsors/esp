<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_sandi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
  
    public function getAktifSandi(){
        $this->db->select('*');
        $this->db->from('sandi');
        $this->db->where('status', 'aktif');
        $query = $this->db->get();
        return $query;
    }

    public function updateAktifStatus($idSandi, $data){
        $this->db->where('idSandi', $idSandi);
        $this->db->update('sandi', $data);
    }
}
