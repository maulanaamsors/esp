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
        $foto ='';              
        
        $object = array(
             'namaMember' => $namaMember,
             'email'      => $email,
             'password'   => md5($password),
             'statusPendidikan'   => $status,
             'tglLahir'   => $tanggal,
             'statusOnline'   => $statusOnline,
             'foto'   => $foto,
        );

        return $this->db->insert('member', $object);     
    }

    public function ubah_member($email, $data){
        $this->db->where('email', $email);
        $this->db->update('member', $data);
    }

    public function ubahfotomember(){
        // $foto = $this->upload->();

        // $this->load->library('upload');
        // $config['upload_path'] = './assets/img/pamflet'; //path folder
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['file_name'] = $nama; //nama yang terupload nantinya
        // $this->upload->initialize($config);
        // if($_FILES['foto']['name'])
        // {
        //     if ($this->upload->do_upload('foto'))
        //     {
        //         $gbr = $this->upload->data();
        //         define( 'WP_MEMORY_LIMIT', '256M' );
        //         $source_url=$config['upload_path'].'/'.$gbr['file_name'];
        //         $image = imagecreatefromjpeg($source_url);
        //         imagejpeg($image, $config['upload_path'].'/'.$gbr['file_name'], 50);
        //         $input = array(
        //             'idEvent'     =>$kar.$kd,
        //             'namaEvent'   =>$nama,
        //             'deskripEvent'=>$deskripsi,
        //             'pamflet'     =>$gbr['file_name'],
        //             'status'      =>"Belum Aktif",
        //             'idJadwal'    =>$jadwal->idJadwal,
        //             'idAdmin'     =>''
        //         );
        //     }
        // }
        //         $this->db->insert('event',$input);
    }

    function getData_Member($email){
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query;
    }
	

}
