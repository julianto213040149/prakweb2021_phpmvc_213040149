<?php

class Mahasiswa extends controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa' ;
        $this->view('Templates/header', $data);
        $this->view('Mahasiswa/index');
        $this->view('Templates/footer');
    }
}

?>