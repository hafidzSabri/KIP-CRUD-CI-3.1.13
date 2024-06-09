<?php

class penerimaModels extends CI_model {

    public function getAllPenerima(){
        return $this->db->get('datakip')->result_array();
    }
    

    public function tambahDataKIP()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "nisn" => $this->input->post('nisn', true),
            "jenisKelamin" => $this->input->post('jenisKelamin', true),
            "golongan" => $this->input->post('golongan', true),
        ];

        $this->db->insert('datakip', $data);
    }
    
    public function hapusDataKIP($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('datakip');
    }

    public function detailKIP($id)
    {
        return $this->db->get_where('datakip', ['id' => $id])->row_array();
        
    }

    public function editKIP()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nik" => $this->input->post('nik', true),
            "nisn" => $this->input->post('nisn', true),
            "jenisKelamin" => $this->input->post('jenisKelamin', true),
            "golongan" => $this->input->post('golongan', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('penerima', $data);
    }


    public function cariDataKIP()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nik', $keyword);
        return $this->db->get('datakip')->result_array();
    }
}