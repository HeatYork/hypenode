<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CreateNotificationController extends BaseController
{
    /**
     * index
     *
     * @author York <jason945119@gmail.com> 2018/5/4
     */
    public function index()
    {
        $password = Hash::make('secret');

        $array = array(
            'web_id' => 'hypenode',
            'username' => 'york',
            'password' => 'yorkpw',
            'add_time' => time());
        DB::connection('mariadb')->table('account')->insert($array);
//        return view('createNotification');
    }
}
