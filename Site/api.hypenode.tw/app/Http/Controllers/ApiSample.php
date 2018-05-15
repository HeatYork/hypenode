<?php

namespace App\Http\Controllers;


use Laravel\Lumen\Routing\Controller as BaseController;

class ApiSample extends BaseController
{
    public function index()
    {
        return response()->json(array('web_id_category'=>\Core\Sequence::generate(\Core\Sequence::WEB_ID)), 200);
    }
}
