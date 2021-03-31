<?php

namespace App\Controller\Index;

use yuns\core\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $data = ['name'=>'china'];
        return $this->success();
    }
}