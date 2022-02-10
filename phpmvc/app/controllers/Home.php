<?php

class Home extends controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('Templates/header' $data);
        $this->view('Home/index' $data);
        $this->view('Tempaltes/footer');
    }
}

?>