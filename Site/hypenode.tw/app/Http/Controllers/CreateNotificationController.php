<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class CreateNotificationController extends BaseController
{
    public function index()
    {
        return view('createNotification');
    }
}
