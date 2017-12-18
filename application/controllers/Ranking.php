<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_ranking'));
		$this->load->library(array('form_validation','session','image_lib'));
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['isi'] = 'member/ranking';
		$this->load->view('member/home',$data);			 
	}	
}
