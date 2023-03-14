<<<<<<< HEAD
<?php

class ICT extends Controller {
    public function index()
    {
        $data['judul'] = 'ICT Center';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $data['subjudul'] = 'ICT Medsos';
        $this->view('templates/header', $data);
        $this->view('ict/index', $data);
        $this->view('templates/footer');
    }

=======
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

>>>>>>> be1485fa00b233f352c7778c437791bdc87986b8
}