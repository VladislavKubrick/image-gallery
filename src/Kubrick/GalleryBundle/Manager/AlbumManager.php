<?php

namespace Kubrick\GalleryBundle\Manager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
//use AppBundle\Serializer;

class AlbumManager
{
    protected $serializer;
    /**
     *
     * @var EntityManager 
     */
    protected $em;
    private $container;
    public function __construct(EntityManager $entityManager, Container $container)
    {

    	//$this->em = $em;
    	//Serializer $serializer
        //$this->serializer = $serializer;
    }

    public function findAll(){
    	//$myservice = $this->get('em');
    	/*
        return $album = $this->get('doctrine')
                ->getManager()
                ->getRepository('KubrickGalleryBundle:Album')
                ->findAll();
         */
    }

    public function findAllByImageLimit(){
    	/*
        $album = $this->em
                ->getManager()
                ->getRepository('KubrickGalleryBundle:Album')
                ->findAllByImageLimit();*/
    }
}