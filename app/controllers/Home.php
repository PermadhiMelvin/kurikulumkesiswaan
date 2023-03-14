<<<<<<< HEAD
<?php 

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Humas - Home'; 
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
=======
<?php 

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Humas - Home'; 
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
>>>>>>> be1485fa00b233f352c7778c437791bdc87986b8
}