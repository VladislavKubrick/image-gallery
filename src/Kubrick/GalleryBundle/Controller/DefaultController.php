<?php

namespace Kubrick\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KubrickGalleryBundle:Default:index.html.twig');
    }
}
