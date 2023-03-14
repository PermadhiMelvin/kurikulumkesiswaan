<<<<<<< HEAD
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

=======
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

>>>>>>> be1485fa00b233f352c7778c437791bdc87986b8
}