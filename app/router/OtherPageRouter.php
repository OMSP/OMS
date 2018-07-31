<?php

use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;

final class OtherPageRouter implements IRouter
{

    /**
     * @param Klein $klein
     */
    public function create(Klein $klein)
    {
        $klein->respond("GET", "/other-page", function (Request $request, Response $response, ServiceProvider $service) {

            /** @var Smarty $smarty */
            $smarty = $service->smarty;
            $file = $service->viewDir . '/other-page.tpl';

            // Check if the page is NOT cached (!) and then assign the content to smarty
            if(!$smarty->isCached('other-page.tpl')) {
                $lipsum = new joshtronic\LoremIpsum();
                $str = $lipsum->paragraphs(5, 'p');
                $currentTime = date('m/d/Y h:i:s a', time());
                $str .= "<h3>Generated {$currentTime}</h3>";

                $smarty->assign('pageContent', $str);
            }

            // Assign these variable at all times (Core vars)
            // Notice how when cached we don't even assign the values, smarty already has a static page for you.
            $smarty->assign($service->smartyParams);
            $service->smarty->assign("pageTitle", "Other page");
            $smarty->display($file);
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
            'url' => '/other-page',
            'title' => 'Other page',
          ],
        ];
    }
}
