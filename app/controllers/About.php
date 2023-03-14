<?php 

class About extends Controller{
    public function index($nama = 'Abdu', $pekerjaan = 'Siswa', $umur= '16')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Tentang Humas';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}