<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function adminHome()
    {
        echo view('admin/home');
    }
}
