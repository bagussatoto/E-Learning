<?php

class M_kelas extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kelas');
    }

    public function detail_kelas($id = null)
    {
        $query = $this->db->get_where('kelas', array('id' => $id))->row();
        return $query;
    }

    public function delete_kelas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_kelas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
