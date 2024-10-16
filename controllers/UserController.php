<?php

require_once './models/User.php';

class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new User($db);
    }

    public function index()
    {
        $users = $this->userModel->read();
        require './views/user/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->create($_POST);
            header("Location: ./public/index.php");
        }
        require './views/user/create.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id'] = $id;
            $this->userModel->update($_POST);
            header("Location: ./public/index.php");
        }
        $user = $this->userModel->readById($id);
        require './views/user/edit.php';
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        header("Location: ./public/index.php");
    }
}
