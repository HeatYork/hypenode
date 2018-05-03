<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CreateNotificationController extends BaseController
{
    public function index()
    {
        $array = array(
            'web_id' => '123',
            'username' => 'york',
            'password' => 'yorkpw',
            'add_time' => time());
        DB::connection('mariadb')->table('account')->insert( $array );
//        return view('createNotification');
    }
}
