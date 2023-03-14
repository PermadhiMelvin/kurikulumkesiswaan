<<<<<<< HEAD
<?php

class BKK extends Controller {
    public function index()
    {
        $data['judul'] = 'BKK';
        $data['subjudul'] = 'BKK';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $this->view('templates/header', $data);
        $this->view('bkk/index', $data);
        //$this->view('pkl/index', $data);
        $this->view('templates/footer');
    }
=======
<?php

class BKK extends Controller {
    public function index()
    {
        $data['judul'] = 'BKK';
        $data['subjudul'] = 'BKK';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $this->view('templates/header', $data);
        $this->view('bkk/index', $data);
        //$this->view('pkl/index', $data);
        $this->view('templates/footer');
    }
>>>>>>> be1485fa00b233f352c7778c437791bdc87986b8
}