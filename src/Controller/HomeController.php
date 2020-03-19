<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Repository\CoursRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(int $page=1, CoursRepository $repository)
    {
        $offset = Cours::LIMIT *($page - 1);
        $cours = $repository->findAllWithJoin((int)$offset, Cours::LIMIT);
        dump($cours); 
        $total = ceil($cours->count()/Cours::LIMIT);
        return $this->render('home/index.html.twig', [
            'cours' => $cours,
            'total' => $total,
            'page' => $page,
        ]);
    }
}
