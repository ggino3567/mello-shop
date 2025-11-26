<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        // TEST
        // echo "<h1>User Index</h1>";
        $data = [];
        helper(['form']);

        echo view('templates/header', $data);
        echo view('login', $data);
        echo view('templates/footer', $data);
    }
}
