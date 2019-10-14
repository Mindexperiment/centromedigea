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
    public function test_ServiziRoute($route, $view)
    {
        $response = $this->get($route);

        $response->assertOk();
        $response->assertViewIs($view);
    }

    public function servizi_routes()
    {
        return [
            [ route('servizi.chirurgia'), 'servizi.chirurgia' ],
            [ route('servizi.conservativa'), 'servizi.conservativa' ],
            [ route('servizi.estetica'), 'servizi.estetica' ],
            [ route('servizi.igiene'), 'servizi.igiene' ],
            [ route('servizi.implantologia'), 'servizi.implantologia' ],
            [ route('servizi.laser'), 'servizi.laser' ],
            [ route('servizi.medicina'), 'servizi.medicina' ],
            [ route('servizi.ortodonzia'), 'servizi.ortodonzia' ],
            [ route('servizi.osteopatia'), 'servizi.osteopatia' ],
            [ route('servizi.paradontologia'), 'servizi.paradontologia' ],
            [ route('servizi.pedodonzia'), 'servizi.pedodonzia' ],
            [ route('servizi.prgf'), 'servizi.prgf' ],
            [ route('servizi.protesi'), 'servizi.protesi' ],
            [ route('servizi.radiologia'), 'servizi.radiologia' ],
            [ route('servizi.roncopatia'), 'servizi.roncopatia' ],
            [ route('servizi.sedazione'), 'servizi.sedazione' ],
        ];
    }
}
