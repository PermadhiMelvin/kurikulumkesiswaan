<?php

class PKL extends Controller {
    public function index()
    {
        $data['judul'] = 'PKL';
        //$data['siswa'] = $this->model('PKL_model')->getAllPKL();
        $data['subjudul'] = 'PKL';
        $this->view('templates/header', $data);
        $this->view('pkl/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail PKL';
        $data['siswa'] = $this->model('PKL_model')->getPKLById($id);
        $this->view('templates/header', $data);
        $this->view('pkl/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('PKL_model')->tambahDataPKL($_POST) > 0){
            Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: '. BASEURL . '/siswa');
            exit;
        }
        else{
            Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . '/pkl');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('PKL_model')->hapusDataPKL($id) > 0){
            Flasher::setFlash('berhasil ', 'dihapus', 'success');
            header('Location: '. BASEURL . '/pkl');
            exit;
        }
        else{
            Flasher::setFlash('gagal ', 'dihapus', 'danger');
            header('Location: '. BASEURL . '/pkl');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('PKL_model')->getPKLById($_POST['id']));
    
    }

    public function ubah() 
    {
        if($this->model('PKL_model')->ubahDataPKL($_POST) > 0){
            Flasher::setFlash('berhasil ', 'diubah', 'success');
            header('Location: '. BASEURL . '/pkl');
            exit;
        }
        else{
            Flasher::setFlash('gagal ', 'diubah', 'danger');
            header('Location: '. BASEURL . '/pkl');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Siswa PKL';
        $data['siswa'] = $this->model('Siswa_model')->cariDataPKL();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}