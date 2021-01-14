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
    public function index()
    {
        $apimanager = new ApiManager();
        $api = $apimanager->selectAll();

        return $this->twig->render('Home/index.html.twig', ['api' => $api]);
    }

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function hero()
    {
        $apimanager = new ApiManager();
        $api = $apimanager->selectAll();
        $api2 = $apimanager->selectAll2();
        $api3 = $apimanager->selectAll3();
        $api4 = $apimanager->selectAll4();
        $api5 = $apimanager->selectAll5();
        $api6 = $apimanager->selectAll6();
        $api7 = $apimanager->selectAll7();
        $api8 = $apimanager->selectAll8();
        $api9 = $apimanager->selectAll9();
        $api10 = $apimanager->selectAll10();

        return $this->twig->render('Home/hero.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'api3' => $api3,
            'api4' => $api4,
            'api5' => $api5,
            'api6' => $api6,
            'api7' => $api7,
            'api8' => $api8,
            'api9' => $api9,
            'api10' => $api10
        ]);
    }

    public function startGame()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $apimanager = new ApiManager();
            $api = $apimanager->selectOneHero($id);
        }
        return $this->twig->render('Home/startGame.html.twig', [
            'api' => $api
        ]);
    }
}
