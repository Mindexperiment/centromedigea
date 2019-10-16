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

    public function test_EsteticaRoute()
    {
        $response = $this->get(route('partners.estetica'));

        $response->assertOk();
        $response->assertViewIs('partners.estetica');
    }

    public function test_FisioterapiaRoute()
    {
        $response = $this->get(route('partners.fisioterapia'));

        $response->assertOk();
        $response->assertViewIs('partners.fisioterapia');
    }

    public function test_LogopediaRoute()
    {
        $response = $this->get(route('partners.logopedia'));

        $response->assertOk();
        $response->assertViewIs('partners.logopedia');
    }

    public function test_OdontoiatriaRoute()
    {
        $response = $this->get(route('partners.odontoiatria'));

        $response->assertOk();
        $response->assertViewIs('partners.odontoiatria');
    }

    public function test_PedodonziaRoute()
    {
        $response = $this->get(route('partners.pedodonzia'));

        $response->assertOk();
        $response->assertViewIs('partners.pedodonzia');
    }

    public function test_PilatesRoute()
    {
        $response = $this->get(route('partners.pilates'));

        $response->assertOk();
        $response->assertViewIs('partners.pilates');
    }

    public function test_IndexRoute()
    {
        $response = $this->get(route('partners.protesi'));

        $response->assertOk();
        $response->assertViewIs('partners.protesi');
    }

    public function test_UditoRoute()
    {
        $response = $this->get(route('partners.udito'));

        $response->assertOk();
        $response->assertViewIs('partners.udito');
    }
}
