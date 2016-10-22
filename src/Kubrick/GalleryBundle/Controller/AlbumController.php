<?php

namespace Kubrick\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Kubrick\GalleryBundle\Repository\AlbumRepository;
use Kubrick\GalleryBundle\Manager\AlbumManager;

class AlbumController extends Controller
{

    public function __construct(){

    }

    public function indexAction()
    {
        return $this->render('KubrickGalleryBundle:Album:index.html.twig');
    }

    public function albumAction()
    {
        return $this->render('KubrickGalleryBundle:Album:album.html.twig');
    }

    public function listAction()
    {
        //$serializer = $this->get('jms_serializer');
        //$response = $serializer->serialize($album,'json');
        $AlbumManager = new AlbumManager;
        $response  = $AlbumManager->findAll();
        return new JsonResponse($response);
/*
        $album = $this->get('doctrine')->getRepository("KubrickGalleryBundle:Album")
                ->findAllByImageLimit();
        $response = $serializer->serialize($album,'json');
        return new JsonResponse($album);
*/
    }
}
