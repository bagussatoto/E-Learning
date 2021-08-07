<?php

class M_bimbel extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('bimbel');
    }

    public function bimbel($id_bimbel = null)
    {
        $query = $this->db->get_where('bimbel', array('id_bimbel' => $id_bimbel))->row();
        return $query;
    }

    public function detail_bimbel($id_bimbel = null)
    {
        $query = $this->db->get_where('bimbel', array('id_bimbel' => $id_bimbel))->row();
        return $query;
    }

    public function delete_bimbel($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_bimbel($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function bimb_mtk()
    {
        $mapel = 'Matematika';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('bimbel');
    }

    public function bimb_ipa()
    {
        $mapel = 'IPA';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('bimbel');
    }

    public function bimb_indo()
    {
        $mapel = 'Bahasa Indo';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('bimbel');
    }

    public function bimb_inggris()
    {
        $mapel = 'Bahasa Ingg';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('bimbel');
    }

    public function bimb_agama()
    {
        $mapel = 'Pendidikan';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('bimbel');
    }

    public function pencarian_d($nama_mapel){
    $this->db->where("nama_mapel",$nama_mapel);
    return $this->db->get("bimbel");
    }
}
