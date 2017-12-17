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

	// public function insert_barang(){

	// 	 $nama_barang = $this->input->post('nama_brg');
	// 	 $ukuran_barang = $this->input->post('ukuran_brg');
	// 	 $satuan_barang = $this->input->post('satuan_brg');
	// 	 $harga_barang = $this->input->post('harga_brg');
				 
	// 	 $object = array(
	// 			 				'nama_brg' => $nama_barang,
	// 			 				'ukuran_brg' => $ukuran_barang,
	// 			 			    'satuan_brg' => $satuan_barang,
	// 			 	   		    'harga_brg' => $harga_barang,
	// 	 );

	// 	 return $this->db->insert('barang', $object);
		
	// }

	// function select_all(){
	// 	$this->db->select('*');
	// 	$this->db->from('barang');
	// 	$this->db->order_by('date_modified', 'desc');
	// 	return $this->db->get();
	// }

	// function select_by_id($id_brg){
	// 	$this->db->select('*');
	// 	$this->db->from('barang');
	// 	$this->db->where('id_brg', $id_brg);
	// 	return $this->db->get();
	// }
	
	// function ubah_barang($id_brg, $data){
	// 	$this->db->where('id_brg', $id_brg);
	// 	$this->db->update('barang', $data);
	// }

	// function hapus_barang($id_brg){
	// 	$this->db->where('id_brg', $id_brg);
	// 	$this->db->delete('barang');
	// }

}

/* End of file barang_model.php */
/* Location: ./application/models/barang_model.php */ 