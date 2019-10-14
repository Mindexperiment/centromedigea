<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;

class WebsiteControllerTest extends TestCase
{
    public function test_HomepageRoute()
    {
        $response = $this->get(route('website.homepage'));

        $response->assertOk();
        $response->assertViewIs('website.homepage');
    }

    public function test_BambiniRoute()
    {
        $response = $this->get(route('website.bambini'));

        $response->assertOk();
        $response->assertViewIs('website.bambini');
    }
}
