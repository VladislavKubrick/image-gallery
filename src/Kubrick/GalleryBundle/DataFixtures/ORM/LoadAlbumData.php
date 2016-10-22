<?php

namespace KubrickGalleryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kubrick\GalleryBundle\Entity\Album;

class LoadAlbumData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	$albums[] = ['name' => 'The first', 'description' => 'The first album'];
    	$albums[] = ['name' => 'The second', 'description' => 'The second album'];
    	$albums[] = ['name' => 'The third', 'description' => 'The third album'];
    	$albums[] = ['name' => 'The fourth', 'description' => 'The fourth album'];
    	$albums[] = ['name' => 'The fifth', 'description' => 'The fifth album'];
        foreach($albums as $item){
            $album = new Album();
        	$album ->setName($item['name']);
        	$album ->setDescription($item['description']);
        	$manager->persist($album);
        }
        $manager->flush();
    }
}