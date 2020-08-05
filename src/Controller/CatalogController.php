<?php

namespace App\Controller;

use App\Services\CatalogService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     * @param CatalogService $catalogServices
     * @return Response
     */
    public function index(CatalogService $catalogServices)
    {
        $currentCatalog = $catalogServices->getCurrentCatalog();
        $nextCatalog = $catalogServices->getNextCatalog();

        return $this->render('catalog/catalog.html.twig', [
            'controller_name' => 'CatalogController',
            'currentCatalog'  => $currentCatalog[0] ?? $currentCatalog,
            'nextCatalog'     => $nextCatalog[0] ?? $nextCatalog    ,
            'current'         => 'catalog'
        ]);
    }
}
