<?php
require_once __DIR__ . '../app/controllers/MahasiswaController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = new MahasiswaController();

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $id = $_GET['id'];
        $controller->edit($id);
        break;
    case 'update':
        $id = $_GET['id'];
        $controller->update($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}