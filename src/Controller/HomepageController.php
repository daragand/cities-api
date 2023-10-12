<?php

namespace App\Controller;

use App\Entity\City;
use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(CityRepository $city): JsonResponse
    {
        $cities = $city->findAll();
        return $this->json([
            'cities' => $cities,
        ]);
    }
}
