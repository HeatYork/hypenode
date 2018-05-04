<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateNotificationController extends BaseController
{
    /**
     * index
     *
     * @author York <jason945119@gmail.com> 2018/5/4
     */
    public function index()
    {
        $array = array(
            'web_id'   => \Core\Sequence::generate(\Core\Sequence::WEB_ID),
            'web_name' => 'hypenode',
            'username' => 'york',
            'password' => Hash::make('abcd'),
            'add_time' => time());
        DB::connection('mariadb')->table('account')->insert($array);
//        return view('createNotification');
    }
}
