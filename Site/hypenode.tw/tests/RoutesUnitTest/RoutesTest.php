<?php

namespace Tests\Unit;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function testRoute_home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testRoute_createNotification()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
