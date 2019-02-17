<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        echo 1234;
    }

    public function admin()
    {
        echo 5678;
    }

    public function login()
    {
        echo '登陆' ;
    }
}
