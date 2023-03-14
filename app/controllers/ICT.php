<?php

class ICT extends Controller {
    public function index()
    {
        $data['judul'] = 'ICT Medsos';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $data['subjudul'] = 'ICT Medsos';
        $this->view('templates/header', $data);
        $this->view('ict/index', $data);
        $this->view('templates/footer');
    }

}