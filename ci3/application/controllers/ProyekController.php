<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProyekController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('restclient');
    }

    public function index()
    {
        $data['proyek'] = $this->restclient->get('/proyek');
        $this->load->view('proyek_list', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = array(
                'namaProyek' => $this->input->post('nama_proyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tgl_mulai'),
                'tglSelesai' => $this->input->post('tgl_selesai'),
                'pimpinanProyek' => $this->input->post('pimpinan_proyek'),
                'keterangan' => $this->input->post('keterangan')
            );

            // Debugging output
            echo '<pre>';

            echo '</pre>';

            $response = $this->restclient->post('/proyek', $data);

            // Debugging output
            echo '<pre>';
            print_r($response);
            echo '</pre>';

            if ($response && !isset($response['error'])) {
                $this->session->set_flashdata('message', 'Proyek berhasil ditambahkan.');
                redirect('/');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan proyek. ' . (isset($response['error']) ? $response['error'] : 'Unknown error.'));
            }
        } else {
            $this->load->view('proyek_create');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = array(
                'namaProyek' => $this->input->post('nama_proyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tgl_mulai'),
                'tglSelesai' => $this->input->post('tgl_selesai'),
                'pimpinanProyek' => $this->input->post('pimpinan_proyek'),
                'keterangan' => $this->input->post('keterangan')
            );
            $this->restclient->put('/proyek/' . $id, $data);
            redirect('/');
        } else {
            $data['proyek'] = $this->restclient->get('/proyek/' . $id);

            // Debugging output
            echo '<pre>';

            echo '</pre>';

            $this->load->view('proyek_edit', $data);
        }
    }




    public function delete($id)
    {
        $response = $this->restclient->delete('/proyek/' . $id);

        // Debugging output
        echo '<pre>';
        print_r($response);
        echo '</pre>';

        if ($response && !isset($response['error'])) {
            $this->session->set_flashdata('message', 'Proyek berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus proyek. ' . (isset($response['error']) ? $response['error'] : 'Unknown error.'));
        }

        redirect('/');
    }
}
?>