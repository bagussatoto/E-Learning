<?php

class M_tugas extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tugas');
    }

    public function tugas($id_tugas = null)
    {
        $query = $this->db->get_where('tugas', array('id_tugas' => $id_tugas))->row();
        return $query;
    }

    public function detail_tugas($id_tugas = null)
    {
        $query = $this->db->get_where('tugas', array('id_tugas' => $id_tugas))->row();
        return $query;
    }

    public function delete_tugas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_tugas($where, $table)
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
        return $this->db->get('tugas');
    }

    public function matematika_xi()
    {
        $mapel = 'Matematika';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function matematika_xii()
    {
        $mapel = 'Matematika';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function ipa_x()
    {
        $mapel = 'IPA';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function ipa_xi()
    {
        $mapel = 'IPA';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function ipa_xii()
    {
        $mapel = 'IPA';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function indo_x()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function indo_xi()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function indo_xii()
    {
        $mapel = 'Bahasa Indonesia';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function inggris_x()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function inggris_xi()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function inggris_xii()
    {
        $mapel = 'Bahasa Inggris';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function agama_x()
    {
        $mapel = 'Pendid_tugasikan Agama Islam';
        $kelas = 'X';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function agama_xi()
    {
        $mapel = 'Pendid_tugasikan Agama Islam';
        $kelas = 'XI';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }

    public function agama_xii()
    {
        $mapel = 'Pendid_tugasikan Agama Islam';
        $kelas = 'XII';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('tugas');
    }
}
