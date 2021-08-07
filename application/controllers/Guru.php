<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'download');
        $this->session->set_flashdata('not-login', 'Gagal!');
        if (!$this->session->userdata('email')) {
            redirect('welcome/guru');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('guru/index');
    }

    public function print_guru(){
        $this->load->model('m_guru');

        $data['user'] = $this->m_guru->tampil_data("guru")->result();
        $this->load->view('admin/print_guru', $data);
    }

    public function data_siswa()
    {
        $this->load->model('m_siswa');

        $data['user'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('template_guru/nav');
        $this->load->view('guru/data_siswa', $data);
        $this->load->view('template_guru/footer');
    }

    public function detail_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id' => $id);
        $detail = $this->m_siswa->detail_siswa($id);
        $data['detail'] = $detail;
        $this->load->view('guru/detail_siswa', $data);
    }

    public function add_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template_guru/nav');
            $this->load->view('guru/add_materi');
            $this->load->view('template_guru/footer');
        } else {
            $upload_video = $_FILES['video'];

            if ($upload_video) {
                $config['allowed_types'] = 'mp4|mkv|mov';
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
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
                'video' => $video,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            ];

            $this->db->insert('materi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('guru'));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/materi_video';
        $config['allowed_types'] = 'mp4|mkv';
        $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 0; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.mp4";
    }

    public function data_bimbel()
    {
        $this->load->model('m_bimbel');

        $data['user'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_bimbel->tampil_data()->result();
        $this->load->view('template_guru/nav');
        $this->load->view('guru/data_bimbel', $data);
        $this->load->view('template_guru/footer');
    }

    public function add_bimbel()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
        $this->load->view('template_guru/nav');
            $this->load->view('guru/add_bimbel');
        $this->load->view('template_guru/footer');
        } else {
            $upload_video = $_FILES['video'];

            if ($upload_video) {
                $config['allowed_types'] = 'doc|docx|pdf';
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
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
                'video' => $video,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            ];

            $this->db->insert('bimbel', $data);
            $this->session->set_flashdata('success-add', 'Berhasil!');
            redirect(base_url('guru/data_bimbel'));
        }
    } 

    public function delete_bimbel($id_bimbel)
    {
        $this->load->model('m_bimbel');
        $where = array('id_bimbel' => $id_bimbel);
        $this->m_bimbel->delete_bimbel($where, 'bimbel');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('guru/data_bimbel');
    }

    public function data_tugas()
    {
        $this->load->model('m_tugas');
        $data['user'] = $this->m_tugas->tampil_data()->result();
        $this->load->view('template_guru/nav');
        $this->load->view('guru/data_tugas', $data);
        $this->load->view('template_guru/footer');
    }  

    public function detail_tugas($id_tugas)
    {
        $this->load->model('m_tugas');
        $where = array('id_tugas' => $id_tugas);
        $detail = $this->m_tugas->detail_tugas($id_tugas);
        $data['detail'] = $detail;
        $this->load->view('guru/detail_tugas', $data);
    }

    public function download_tugas($id_tugas)
    {
        $data = $this->db->get_where('tugas',['id_tugas'=>$id_tugas])->row();
        force_download('assets/materi_video/'.$data->video,NULL);
    }

}
