<?php

class HomeController extends Controller {

    public function index()
    {
        return $this->view('home');
    }

    public function getusers()
    {
        $users = $this->model('User');
        return $this->view('users', ['users' => $users]);
        
    }
}