<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SerieController extends AbstractController
{
    /**
     * @Route ("/", name="accueil")
     */
    public function TakeSerie()
    {
        $title = 'Les meilleurs
            séries du monde';
        $serie = [
            'serie1' => [
                'id'=> '1',
                'titre' => 'Petit Poney',
                'image'=> 'assets/img/poney.jpg',
                'description' => 'l\'histoire des petits poneys'
            ],
            'serie2' => [
                'id' => '2',
                'titre' => 'Dora l\'exploratrice',
                'image' => 'assets/img/dora.jpg',
                'description' => 'Une chieuse accompagnée d\'un singe'
            ],
            'serie3' => [
                'id' => '3',
                'titre' => 'La Reine des neiges',
                'image' => 'assets/img/frozen.jpg',
                'description' => 'Un dessin animé avec une chanson qui donne envie de tuer des gens'
            ],
            'serie4' => [
                'id' => '4',
                'titre' => 'Franklin',
                'image' => 'assets/img/franklin.jpg',
                'description' => 'Une tortue qui sait lasser ses chausures alors qu\'elle n\'en a pas'
            ],
            'serie5' => [
                'id' => '5',
                'titre' => 'Power Ranger',
                'image' => 'assets/img/power.jpg',
                'description' => '5 jeunes qui ne se prennent pas pour du caca'
            ],
            'serie6' => [
                'id' => '6',
                'titre' => 'Glee',
                'image' => 'assets/img/glee.jpg',
                'description' => 'Je ne sais absolument pas à quoi sert cette série'
            ]
        ];

        return $this->render('accueil.html.twig', [
            'title' => $title,
            'serie' => $serie,
        ]);
    }

    /**
     * @Route ("/article", name="article")
     */
    public function page1()
    {
        $title = 'Les meilleurs
            séries du monde';

        return $this->render('article.html.twig', [
            'title' => $title
        ]);
    }

}