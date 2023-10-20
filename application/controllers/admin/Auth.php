<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('admin');
        $this->db->where('username', $username)->where('password', $password);
        $data = $this->db->get()->row();
        if ($data == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert">
                        <span class="fe fe-minus-circle fe-16 mr-2"></span> A simple danger alert—check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button></div>
            ');
            redirect('admin/auth');
        } else {
            $admindata = array(
                'id_admin' => $data->id_admin,
                'username' => $data->username,
                'password' => $data->password,
                'level' => "admin"
            );
        }
        $this->session->set_userdata($admindata);
        redirect('admin/anime/');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth');
        
    }
}