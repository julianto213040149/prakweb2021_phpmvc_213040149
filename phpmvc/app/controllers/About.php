<?php

class About extends controller {
    public function index($nama = 'Julianto', $pekerjaan = 'Mahasiswa', $umur = 26)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('Templates/header' $data);
        $this->view('About/index', $data);
        $this->view('Templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('Templates/header' $data);
        $this->view ('About/page');
        $this->view('Templates/footer');
    }
}

?>