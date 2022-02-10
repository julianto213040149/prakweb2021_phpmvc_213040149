<?php

class Home extends controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('Templates/header' $data);
        $this->view('Home/index');
        $this->view('Tempaltes/footer');
    }
}

?>