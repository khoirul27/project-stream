<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anime extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('level') != "admin"){
            redirect('admin/auth');
        }
    }
	public function index()
	{
        $data = array(
            'judul_halaman' => "dashboard"
        );
		$this->template->load('admin/template','admin/dashboard', array_merge($data));
	}
}
