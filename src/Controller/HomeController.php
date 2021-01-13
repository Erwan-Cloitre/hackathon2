<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\ApiManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $apimanager = new ApiManager();
        $api = $apimanager->selectAll();
        $api2 = $apimanager->selectAll2();

        return $this->twig->render('Home/index.html.twig', [
            'api' => $api,
            'api2' => $api2
        ]);
    }
}
