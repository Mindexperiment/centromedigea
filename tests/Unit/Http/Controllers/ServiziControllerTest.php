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

    /**
     * @dataProvider servizi_routes
     */
    public function test_ServiziRoute($route)
    {
        $response = $this->get(route($route));

        $response->assertOk();
        $response->assertViewIs($route);
    }

    public function servizi_routes()
    {
        return [
            [ 'servizi.chirurgia' ],
            [ 'servizi.conservativa' ],
            [ 'servizi.estetica' ],
            [ 'servizi.igiene' ],
            [ 'servizi.implantologia' ],
            [ 'servizi.laser' ],
            [ 'servizi.medicina' ],
            [ 'servizi.ortodonzia' ],
            [ 'servizi.osteopatia' ],
            [ 'servizi.paradontologia' ],
            [ 'servizi.pedodonzia' ],
            [ 'servizi.prgf' ],
            [ 'servizi.protesi' ],
            [ 'servizi.radiologia' ],
            [ 'servizi.roncopatia' ],
            [ 'servizi.sedazione' ],
        ];
    }
}
