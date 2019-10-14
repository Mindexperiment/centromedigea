<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;

class PartnersControllerTest extends TestCase
{
    public function test_IndexRoute()
    {
        $response = $this->get(route('partners.index'));

        $response->assertOk();
        $response->assertViewIs('partners.index');
    }
}
