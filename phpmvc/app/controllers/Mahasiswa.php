<?php

class Mahasiswa extends controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa' ;
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('Templates/header', $data);
        $this->view('Mahasiswa/index' $data);
        $this->view('Templates/footer');
    }
}

?>