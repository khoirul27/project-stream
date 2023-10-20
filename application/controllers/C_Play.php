<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Play extends CI_Controller {

	public function index()
	{
		$this->load->view('play');
	}
	public function play($id)
	{
		$this->load->model('filem_model', 'filem');
		
		$this->db->from('anime');
		$this->db->where('slug', $id);
		$anime = $this->db->get()->row();
		$data = array(
			'anime' => $anime,
			'judul_halaman' => "Detail"
		);
		$data['terbaru'] = $this->filem->terbaru();
		$this->load->view('play', array_merge($data));
	}
}