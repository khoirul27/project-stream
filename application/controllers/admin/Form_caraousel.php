<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_caraousel extends CI_Controller
{

	public function index()
	{
		$this->db->from('anime');
		$caraousel = $this->db->get()->result_array();

    $this->db->from('caraousel');
    $caraousel2 = $this->db->get()->result_array();

		$data = array(
			'caraousel' => $caraousel,
      'caraousel2' => $caraousel2,
      'judul_halaman' => "Form caraousel"
		);
		$this->template->load('admin/template', 'admin/form_caraousel', array_merge($data));
	}

	public function simpan()
	{
		$namafile = date('YmdHis') . '.jpg';
    $config['upload_path'] = 'asset/admin/img/caraousel';
    $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
    $config['allowed_types'] = '*';
    $config['file_name'] = $namafile;
    $this->load->library('upload', $config);
    if ($_FILES['foto_caraousel']['size'] >= 500 * 1024) {
      $this->session->set_flashdata('alert', '
            <div class="col-12 mb-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong>Ukuran foto lebih dari 500kb. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
                    ');
      redirect('admin/form_caraousel/simpan/' . $this->input->post('foto_caraousel'));
    } elseif (!$this->upload->do_upload('foto_caraousel')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $data = array('upload_data' => $this->upload->data());
    }

		$data = array(
			'judul' => $this->input->post('judul'),
			'foto_caraousel' => $namafile
		);

		$this->db->insert('caraousel', $data);
    $this->session->set_flashdata('alert', '
    <div class="col-12 mb-4">
              <div class="alert alert-success  alert-dismissible fade show" role="alert">
                Data berhasil di inputkan. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
    ');
    redirect('admin/Form_caraousel/');
	}

  public function hapus($id) {
    $filename = FCPATH . '/asset/admin/img/caraousel/' .$id;
    if (file_exists($filename)) {
      unlink("./asset/admin/img/caraousel/".$id);
    }

    $where = array('foto_caraousel' => $id);
    $this->db->Delete('caraousel',$where);
    $this->session->set_flashdata('alert', '
        <div class="col-12 mb-4">
                  <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    Data berhasil di hapus. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
        ');
    redirect('admin/Form_caraousel/');
  }
}