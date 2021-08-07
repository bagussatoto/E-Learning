<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bimbel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function bimbel($id_bimbel)
    {
        $this->load->library('disqus');

        $this->load->model('m_bimbel');
        $where = array('id_bimbel' => $id_bimbel);
        $detail = $this->m_bimbel->bimbel($id_bimbel);
        $data['detail'] = $detail;
        $data['disqus'] = $this->disqus->get_html();
        $this->load->view('materi/bimbel', $data);
    }

    public function bimb_mtk()
    {
        $this->load->model('m_bimbel');
        $data['materi'] = $this->m_bimbel->bimb_mtk()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/mtk_bimb', $data);
        $this->load->view('template/footer');
    }

    public function bimb_ipa()
    {
        $this->load->model('m_bimbel');
        $data['materi'] = $this->m_bimbel->bimb_ipa()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/ipa_bimb', $data);
        $this->load->view('template/footer');
    }

    public function bimb_indo()
    {
        $this->load->model('m_bimbel');
        $data['materi'] = $this->m_bimbel->bimb_indo()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/indo_bimb', $data);
        $this->load->view('template/footer');
    }

    public function bimb_inggris()
    {
        $this->load->model('m_bimbel');
        $data['materi'] = $this->m_bimbel->bimb_inggris()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/inggris_bimb', $data);
        $this->load->view('template/footer');
    }

    public function bimb_agama()
    {
        $this->load->model('m_bimbel');
        $data['materi'] = $this->m_bimbel->bimb_agama()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/agama_bimb', $data);
        $this->load->view('template/footer');
    }

    public function upload()
    {
    	 $this->load->model('m_tugas');
            $upload_video = $_FILES['video'];

            if ($upload_video) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/materi_video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa', true)),
                'video' => $video,
            ];

            $this->db->insert('tugas', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('materi/bimbel', $data));
        
    }

   
}
