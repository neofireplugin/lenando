<?php

namespace LenandoExport;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router as WebRouter;

class LenandoExportRouteServiceProvider extends RouteServiceProvider
{
    public function map(ApiRouter $api, WebRouter $webRouter) {

        $webRouter->get('migration', 'LenandoExport\Migrations\CreateSettings@run');
        
        $api->version(['v1'], ['middleware' => ['oauth']], function ($router) {
            $router->get('example/export', ['uses' => 'LenandoExport\Controllers\VariationExportController@export']);
        });
    }
}
