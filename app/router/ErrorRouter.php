<?php

use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;

final class HomeRouter implements IRouter
{

    /**
     * @param Klein $klein
     */
    public function create(Klein $klein)
    {
        // Example of how the router works;
        // Check the request method for GET (Standard page request)
        // Then check if the page is / (Index page)
        // Then run the function that gives you the page
        $klein->respond("GET", "/", function (Request $request, Response $response, ServiceProvider $service) {

            /** @var Smarty $smarty */
            $smarty = $service->smarty;
            $file = $service->viewDir . '/index.tpl';

            //Assign variable to smarty to use.
            $smarty->assign($service->smartyParams);
            $service->smarty->assign("pageTitle", "Home");
            $smarty->display($file); // Show the page to the client
        });
    }

    /**
     * null for no links to be generated, an array of links if you need them
     * @return array|null
     */
    public function getLinks()
    {
        return [
            0 => [
                'url' => '/',
                'title' => 'Home',
            ],

        ];
    }
}
