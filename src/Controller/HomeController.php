<?php

namespace App\Controller;

use App\Repository\SliderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(SliderRepository $sliderRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'slider_items' => $sliderRepository->findAllUsed(),
            'current' => 'homepage'
        ]);
    }
}
