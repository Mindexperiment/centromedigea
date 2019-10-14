<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;

class ServiziControllerTest extends TestCase
{
    public function test_IndexRoute()
    {
        $response = $this->get(route('servizi.index'));

        $response->assertOk();
        $response->assertViewIs('servizi.index');
    }
}
