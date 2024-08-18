<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Pass the base URL as an argument
        $this->load->library('restclient2', array('base_url' => 'http://localhost:8080'));
    }

    public function index()
    {
        $data['lokasi'] = $this->restclient2->get('/lokasi');
        $data['proyek'] = $this->restclient2->get('/proyek');
        $this->load->view('main_view', $data);
    }
}
?>