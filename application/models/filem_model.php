<?php 

class filem_model extends CI_Model{
    public function semua (){
        return $this->db->get('anime')->result_array(); 
    }
    public function allfilem($limit,$start,$keyword = null)
    {
        if ($keyword) {
           $this->db->like('judul', $keyword);
        }
        return $this->db->get('anime',$limit,$start)->result_array(); 
    }
    public function semuafilem()
    {
        return $this->db->get('anime')->num_rows(); 
    }
    public function caraousel()
    {
        return $this->db->get('caraousel')->result_array(); 
    }
    public function terbaru()
    {
        return $this->db->select('*')->from('anime')->order_by('tanggal_rilis', 'DESC')->limit(4)->get()->result_array();
    }
}