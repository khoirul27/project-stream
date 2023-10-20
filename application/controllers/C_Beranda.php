<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Beranda extends CI_Controller
{

	public function index()
	{
		$this->load->model('filem_model', 'filem');

		$this->load->library('pagination');

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			// $this->session->set_userdata('cari', $data['keyword']);
		} else {
			$data['keyword'] = null;
		}

		$config['total_rows'] = $this->filem->semuafilem();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['filem'] = $this->filem->allfilem($config['per_page'], $data['start'], $data['keyword']);
		$data['caraousel'] = $this->filem->caraousel();
		$data['terbaru'] = $this->filem->terbaru();
		$data['judul_halaman'] = "beranda";

		$data['anime'] = $this->db->select('*')->from('anime')->order_by('tanggal_rilis', 'DESC');

		$this->load->view('beranda', array_merge($data));
	}
	public function blog()
	{
		$this->load->view('blog');
	}
}