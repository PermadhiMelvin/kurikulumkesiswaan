<?php

class STiru extends Controller {
    public function index()
    {
        $data['judul'] = 'Studi Tiru';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $data['subjudul'] = 'Studi Tiru';
        $this->view('templates/header', $data);
        $this->view('stiru/index', $data);
        $this->view('templates/footer');
    }

}