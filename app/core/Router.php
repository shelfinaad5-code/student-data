<?php

class Router
{
    public function run(): void
    {
        $url = $_GET['url'] ?? 'students';
        $url = trim($url, '/');
        $method = $_SERVER['REQUEST_METHOD'];

        $controller = new StudentController();

        if ($method === 'GET' && $url === 'students') {
            $controller->index();

        } elseif ($method === 'GET' && $url === 'students/create') {
            $controller->create();

        } elseif ($method === 'POST' && $url === 'students') {
            $controller->store();

        } elseif ($method === 'GET' && $url === 'students/edit') {
            $controller->edit();

        } elseif ($method === 'POST' && $url === 'students/update') {
            $controller->update();

        } elseif ($method === 'POST' && $url === 'students/delete') {
            $controller->destroy();

        } else {
            http_response_code(404);
            echo 'Halaman tidak ditemukan';
        }
    }
}