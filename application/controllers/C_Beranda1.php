<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->db->from('anime');
		$anime = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$data = array(
			'anime' => $anime,
			'caraousel' => $caraousel,
			'judul_halaman' => "Beranda"
		);
		$this->load->view('beranda', array_merge($data));
	}

	public function play($id)
	{
		$this->db->from('anime');
		$this->db->where('slug',$id);
		$anime = $this->db->get()->row();
		$data = array(
			'anime' => $anime,
			'judul_halaman' => "Detail"
		);
		$this->load->view('play', array_merge($data));
	}
}
