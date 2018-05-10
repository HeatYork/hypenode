<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends BaseController
{
    /**
     * index
     *
     * @author York <jason945119@gmail.com> 2018/5/4
     */
    public function index()
    {
        return view('home');
    }
}
