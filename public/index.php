<?php
require '../config/config.php';

$db = getDbConnection();
$userController = new UserController($db);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $userController->create();
        break;
    case 'edit':
        $userController->edit($id);
        break;
    case 'delete':
        $userController->delete($id);
        break;
    default:
        $userController->index();
}
