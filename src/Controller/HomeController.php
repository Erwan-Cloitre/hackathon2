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
        $api2 = $apimanager->selectAll2();
        $api3 = $apimanager->selectAll3();

        return $this->twig->render('Home/index.html.twig', ['api' => $api, 'api2' => $api2, 'api3' => $api3]);
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
            $api2 = $apimanager->selectOneHero(rand(1,700));
        }
        return $this->twig->render('Home/startGame.html.twig', [
            'api' => $api,
            'api2' => $api2
        ]);
    }

    public function round1()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apimanager = new ApiManager();
            $id =
                [
                    'id1' => $_POST['id'],
                    'id2' => $_POST['id2']
                ];
            $stats1 =
                [
                    '1' => $_POST['intel'],
                    '2' => $_POST['force'],
                    '3' => $_POST['vitesse'],
                    '4' => $_POST['vie'],
                    '5' => $_POST['puissance'],
                    '6' => $_POST['combat'],
                ];

            $stats2 =
                [
                    '7' => $_POST['intel2'],
                    '8' => $_POST['force2'],
                    '9' => $_POST['vitesse2'],
                    '10' => $_POST['vie2'],
                    '11' => $_POST['puissance2'],
                    '12' => $_POST['combat2'],
                ];
            $maxPdv1 = 100;
            $maxPdv2 = 100;
            $damage = 0;
            $damage1 = $stats1[rand(1,6)];
            $damage2 = $stats2[rand(7,12)];
            if ($damage1 > $damage2) {
                $damage = $damage1 - $damage2;
                $new2 = $maxPdv2 - $damage;
                $new1 = $maxPdv1;
            }elseif ($damage1 < $damage2){
                $damage =  $damage2 - $damage1;
                $new1 = $maxPdv1 - $damage;
                $new2 = $maxPdv2;
            }else{
                $new1 = $maxPdv1;
                $new2 = $maxPdv2;
            }
            $api = $apimanager->selectOneHero($id['id1']);
            $api2 = $apimanager->selectOneHero($id['id2']);
        }
        return $this->twig->render('Home/fight.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'damage' => $damage,
            'new1' => $new1,
            'new2' => $new2
        ]);
    }

    public function round2()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apimanager = new ApiManager();
            $id =
                [
                    'id1' => $_POST['id'],
                    'id2' => $_POST['id2']
                ];
            $pdv =
                [
                    'new1' => $_POST['new1'],
                    'new2' => $_POST['new2']
                ];
            $stats1 =
                [
                    '1' => $_POST['intel'],
                    '2' => $_POST['force'],
                    '3' => $_POST['vitesse'],
                    '4' => $_POST['vie'],
                    '5' => $_POST['puissance'],
                    '6' => $_POST['combat'],
                ];

            $stats2 =
                [
                    '7' => $_POST['intel2'],
                    '8' => $_POST['force2'],
                    '9' => $_POST['vitesse2'],
                    '10' => $_POST['vie2'],
                    '11' => $_POST['puissance2'],
                    '12' => $_POST['combat2'],
                ];
            $maxPdv1 = $pdv['new1'];
            $maxPdv2 = $pdv['new2'];
            $damage = 0;
            $damage1 = $stats1[rand(1,6)];
            $damage2 = $stats2[rand(7,12)];
            if ($damage1 > $damage2) {
                $damage = $damage1 - $damage2;
                $new2 = $maxPdv2 - $damage;
                $new1 = $maxPdv1;
            }elseif ($damage1 < $damage2){
                $damage =  $damage2 - $damage1;
                $new1 = $maxPdv1 - $damage;
                $new2 = $maxPdv2;
            }else{
                $new1 = $maxPdv1;
                $new2 = $maxPdv2;
            }
            $api = $apimanager->selectOneHero($id['id1']);
            $api2 = $apimanager->selectOneHero($id['id2']);
        }
        return $this->twig->render('Home/fight2.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'damage' => $damage,
            'new1' => $new1,
            'new2' => $new2
        ]);
    }

    public function round3()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apimanager = new ApiManager();
            $id =
                [
                    'id1' => $_POST['id'],
                    'id2' => $_POST['id2']
                ];
            $pdv =
                [
                    'new1' => $_POST['new1'],
                    'new2' => $_POST['new2']
                ];
            $stats1 =
                [
                    '1' => $_POST['intel'],
                    '2' => $_POST['force'],
                    '3' => $_POST['vitesse'],
                    '4' => $_POST['vie'],
                    '5' => $_POST['puissance'],
                    '6' => $_POST['combat'],
                ];

            $stats2 =
                [
                    '7' => $_POST['intel2'],
                    '8' => $_POST['force2'],
                    '9' => $_POST['vitesse2'],
                    '10' => $_POST['vie2'],
                    '11' => $_POST['puissance2'],
                    '12' => $_POST['combat2'],
                ];
            $maxPdv1 = $pdv['new1'];
            $maxPdv2 = $pdv['new2'];
            $damage = 0;
            $damage1 = $stats1[rand(1,6)];
            $damage2 = $stats2[rand(7,12)];
            if ($damage1 > $damage2) {
                $damage = $damage1 - $damage2;
                $new2 = $maxPdv2 - $damage;
                $new1 = $maxPdv1;
            }elseif ($damage1 < $damage2){
                $damage =  $damage2 - $damage1;
                $new1 = $maxPdv1 - $damage;
                $new2 = $maxPdv2;
            }else{
                $new1 = $maxPdv1;
                $new2 = $maxPdv2;
            }
            $api = $apimanager->selectOneHero($id['id1']);
            $api2 = $apimanager->selectOneHero($id['id2']);
            if ($new2 <= 0){
                return $this->twig->render('Home/resultatGood.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }elseif ($new1 <= 0){
                return $this->twig->render('Home/resultatBad.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }
        }
        return $this->twig->render('Home/fight3.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'damage' => $damage,
            'new1' => $new1,
            'new2' => $new2
        ]);
    }

    public function round4()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apimanager = new ApiManager();
            $id =
                [
                    'id1' => $_POST['id'],
                    'id2' => $_POST['id2']
                ];
            $pdv =
                [
                    'new1' => $_POST['new1'],
                    'new2' => $_POST['new2']
                ];
            $stats1 =
                [
                    '1' => $_POST['intel'],
                    '2' => $_POST['force'],
                    '3' => $_POST['vitesse'],
                    '4' => $_POST['vie'],
                    '5' => $_POST['puissance'],
                    '6' => $_POST['combat'],
                ];

            $stats2 =
                [
                    '7' => $_POST['intel2'],
                    '8' => $_POST['force2'],
                    '9' => $_POST['vitesse2'],
                    '10' => $_POST['vie2'],
                    '11' => $_POST['puissance2'],
                    '12' => $_POST['combat2'],
                ];
            $maxPdv1 = $pdv['new1'];
            $maxPdv2 = $pdv['new2'];
            $damage = 0;
            $damage1 = $stats1[rand(1,6)];
            $damage2 = $stats2[rand(7,12)];
            if ($damage1 > $damage2) {
                $damage = $damage1 - $damage2;
                $new2 = $maxPdv2 - $damage;
                $new1 = $maxPdv1;
            }elseif ($damage1 < $damage2){
                $damage =  $damage2 - $damage1;
                $new1 = $maxPdv1 - $damage;
                $new2 = $maxPdv2;
            }else{
                $new1 = $maxPdv1;
                $new2 = $maxPdv2;
            }
            $api = $apimanager->selectOneHero($id['id1']);
            $api2 = $apimanager->selectOneHero($id['id2']);
            if ($new2 <= 0){
                return $this->twig->render('Home/resultatGood.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }elseif ($new1 <= 0){
                return $this->twig->render('Home/resultatBad.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }
        }
        return $this->twig->render('Home/fight4.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'damage' => $damage,
            'new1' => $new1,
            'new2' => $new2
        ]);
    }

    public function finalround()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apimanager = new ApiManager();
            $id =
                [
                    'id1' => $_POST['id'],
                    'id2' => $_POST['id2']
                ];
            $pdv =
                [
                    'new1' => $_POST['new1'],
                    'new2' => $_POST['new2']
                ];
            $stats1 =
                [
                    '1' => $_POST['intel'],
                    '2' => $_POST['force'],
                    '3' => $_POST['vitesse'],
                    '4' => $_POST['vie'],
                    '5' => $_POST['puissance'],
                    '6' => $_POST['combat'],
                ];

            $stats2 =
                [
                    '7' => $_POST['intel2'],
                    '8' => $_POST['force2'],
                    '9' => $_POST['vitesse2'],
                    '10' => $_POST['vie2'],
                    '11' => $_POST['puissance2'],
                    '12' => $_POST['combat2'],
                ];
            $maxPdv1 = $pdv['new1'];
            $maxPdv2 = $pdv['new2'];
            $damage = 0;
            $damage1 = $stats1[rand(1,6)];
            $damage2 = $stats2[rand(7,12)];
            if ($damage1 > $damage2) {
                $damage = $damage1 - $damage2;
                $new2 = $maxPdv2 - $damage;
                $new1 = $maxPdv1;
            }elseif ($damage1 < $damage2){
                $damage =  $damage2 - $damage1;
                $new1 = $maxPdv1 - $damage;
                $new2 = $maxPdv2;
            }else{
                $new1 = $maxPdv1;
                $new2 = $maxPdv2;
            }
            $api = $apimanager->selectOneHero($id['id1']);
            $api2 = $apimanager->selectOneHero($id['id2']);
            if ($new2 <= 0){
                return $this->twig->render('Home/resultatGood.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }elseif ($new1 <= 0){
                return $this->twig->render('Home/resultatBad.html.twig', [
                    'api' => $api,
                    'api2' => $api2,
                    'damage' => $damage,
                    'new1' => $new1,
                    'new2' => $new2
                ]);
            }
        }
        return $this->twig->render('Home/finalFight.html.twig', [
            'api' => $api,
            'api2' => $api2,
            'damage' => $damage,
            'new1' => $new1,
            'new2' => $new2
        ]);
    }
}
