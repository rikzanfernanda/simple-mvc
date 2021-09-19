<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once BASE_PATH . '/src/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once BASE_PATH . '/src/models/' . $model . '.php';
        return new $model;
    }
}