<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['data'] = $this->model('data')->getAll();
        $this->view('home/index', $data);
    }
}