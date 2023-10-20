<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_anime extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('level') != "admin") {
      redirect('admin/auth');
    }
  }
  public function index()
  {
    $this->db->select('*')->from('anime');
    $this->db->order_by('id_anime', 'ASC');
    $anime = $this->db->get()->result_array();

    $data = array(
      'anime' => $anime,
      'judul_halaman' => "Form anime"
    );

    $this->template->load('admin/template', 'admin/form_anime', array_merge($data));
  }
  public function simpan()
  {
    $namafile = date('YmdHis') . '.jpg';
    $config['upload_path'] = 'asset/admin/img/anime';
    $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
    $config['allowed_types'] = '*';
    $config['file_name'] = $namafile;
    $this->load->library('upload', $config);
    if ($_FILES['foto']['size'] >= 500 * 1024) {
      $this->session->set_flashdata('alert', '
            <div class="col-12 mb-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong>Ukuran foto lebih dari 500kb. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
                    ');
      redirect('admin/form_anime/simpan/' . $this->input->post('foto'));
    } elseif (!$this->upload->do_upload('foto')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $data = array('upload_data' => $this->upload->data());
    }

    $judul = $this->input->post('judul');
    $cekjudul = $this->db->where('judul', $judul)->count_all_results('anime');
    if ($cekjudul == 1) {
      $this->session->set_flashdata('alert', '
            <div class="col-12 mb-4">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong>Judul yang anda masukkan sudah ada. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>');
      redirect('admin/konten/index');
    }

    $data = array(

      'judul'      => $this->input->post('judul'),
      'foto'       => $namafile,
      'link'       => $this->input->post('link'),
      'slug'       => str_replace(' ','-',$this->input->post('judul'))
    );
    $this->db->insert('anime', $data);
    $this->session->set_flashdata('alert', '
        <div class="col-12 mb-4">
                  <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    Data filem berhasil di inputkan. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
        ');
    redirect('admin/form_anime/index');
  }

  public function simpan_detail($id_anime)
  {
    $data = array(
      'jenis_filem' => $this->input->post('jenis_filem'),
      'produksi' => $this->input->post('produksi'),
      'penulis' => $this->input->post('penulis'),
      'durasi' => $this->input->post('durasi'),
      'tanggal_rilis' => $this->input->post('tanggal_rilis'),
      'kualitas' => $this->input->post('kualitas'),
      'sinopsis' => $this->input->post('sinopsis')
    );
    $where = array(
      'id_anime' => $id_anime
    );
    $this->db->update('anime', $data, $where);
    redirect('admin/form_anime/index');
  }
  public function hapus($id)
  {
    $filename = FCPATH . '/asset/admin/img/anime/' . $id;
    if (file_exists($filename)) {
      unlink("./asset/admin/img/anime/" . $id);
    }

    $where = array('foto' => $id);

    $this->db->Delete('anime', $where);
    $this->session->set_flashdata('alert', '
        <div class="col-12 mb-4">
                  <div class="alert alert-info  alert-dismissible fade show" role="alert">
                    Data filem berhasil di hapus. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
        ');
    redirect('admin/form_anime/');
  }
  public function update()
  {
    $namafile = $this->input->post('foto');
    $config['upload_path'] = 'asset/admin/img/anime';
    $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
    $config['allowed_types'] = '*';
    $config['file_name'] = $namafile;
    $config['overwrite'] = true;
    $this->load->library('upload', $config);
    if ($_FILES['foto']['size'] >= 500 * 1024) {
      $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
      redirect('admin/anime/' . $this->input->post('foto'));
    } elseif (!$this->upload->do_upload('foto')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $data = array('upload_data' => $this->upload->data());
    }

    $data = array(
      'judul' => $this->input->post('judul'),
      'link'  => $this->input->post('link'),
      'slug'  => str_replace(' ','-',$this->input->post('judul'))
    );
    $where = array(
      'foto' => $this->input->post('foto')
    );
    $data = $this->db->update('anime', $data, $where);
    $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>data berhasil di simpan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
    redirect('admin/anime/');
  }
}