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
    public function test_ServiziRoute($route, $page)
    {
        $response = $this->get(route($route));

        $response->assertOk();
        $response->assertViewIs('servizi.index');
        $response->assertViewHas('page', $page);
    }

    public function servizi_routes()
    {
        return [
            [ 'servizi.chirurgia', 'servizi.pages.chirurgia-page' ],
            [ 'servizi.conservativa', 'servizi.pages.conservativa-page' ],
            [ 'servizi.estetica', 'servizi.pages.estetica-page' ],
            [ 'servizi.igiene', 'servizi.pages.igiene-page' ],
            [ 'servizi.implantologia', 'servizi.pages.implantologia-page' ],
            [ 'servizi.laser', 'servizi.pages.laser-page' ],
            [ 'servizi.medicina', 'servizi.pages.medicina-page' ],
            [ 'servizi.ortodonzia', 'servizi.pages.ortodonzia-page' ],
            [ 'servizi.osteopatia', 'servizi.pages.osteopatia-page' ],
            [ 'servizi.paradontologia', 'servizi.pages.paradontologia-page' ],
            [ 'servizi.pedodonzia', 'servizi.pages.pedodonzia-page' ],
            [ 'servizi.prgf', 'servizi.pages.prgf-page' ],
            [ 'servizi.protesi', 'servizi.pages.protesi-page' ],
            [ 'servizi.radiologia', 'servizi.pages.radiologia-page' ],
            [ 'servizi.roncopatia', 'servizi.pages.roncopatia-page' ],
            [ 'servizi.sedazione', 'servizi.pages.sedazione-page' ],
        ];
    }
}
