<?php

namespace App\Controller;
use App\Controller\AdminRepository;
use App\Entity\Cours;
use App\Repository\CoursRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(int $page=1, CoursRepository $repository ,CategoryRepository $category)
    {
        /**
        * @Route("/{page<\d+>}", name="blog", methods={"GET"})
        */
        $offset = Cours::LIMIT *($page - 1);
        $cours = $repository->findAllWithJoin((int)$offset, Cours::LIMIT);
        dump($cours);
        $total = ceil($cours->count()/Cours::LIMIT);
        return $this->render('home/index.html.twig', [
            'cours' => $cours,
            'total' => $total,
            'page' => $page,
            'category'=>$category->findAll(),
        ]);
    }


     /**
     * @Route("/", name="admin")
     */
    public function adminindex(int $page=1, CoursRepository $repository ,CategoryRepository $category)
    {
        /**
        * @Route("/{page<\d+>}", name="blog", methods={"GET"})
        */
        $offset = Cours::LIMIT *($page - 1);
        $cours = $repository->findAllWithJoin((int)$offset, Cours::LIMIT);
        dump($cours);
        $total = ceil($cours->count()/Cours::LIMIT);
        return $this->render('admin/index.html.twig', [
            'cours' => $cours,
            'total' => $total,
            'page' => $page,
            'category'=>$category->findAll(),
        ]);
    }
}
