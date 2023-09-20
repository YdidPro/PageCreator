<?php 

namespace YDID\PageCreatorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/ydid/page-creator', name:'page_creator')]
class PageCreatorController extends AbstractController
{
    #[Route('/', name:'index')]
    public function index()
    {
        return $this->render('@YdidPageCreator/index.html.twig', []);
    }
}