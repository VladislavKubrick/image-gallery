<?php

namespace KubrickGalleryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kubrick\GalleryBundle\Entity\Image;
use Kubrick\GalleryBundle\Entity\Album;

class LoadImageData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $max_images = [
            1 => 5,  //album 1 contain 5 images
            2 => 20, //album 2 contain 20 images
            3 => 20, //album 3 contain 20 images
            4 => 20, //album 4 contain 20 images
            5 => 20  //album 5 contain 20 images
        ];
        $image_id = 1;
        for ($album_id=1; $album_id <= count($max_images); $album_id++) { 
            for ($image_number = 1; $image_number <= $max_images[$album_id]; $image_number++) { 
                $url = $image_id++ . '.jpg';
                $images[] = ['album' => $album_id, 'url' => $url, 'name' => 'Image', 'description' => 'Image description'];
            }
        }
        foreach($images as $item){
            $image = new Image();
            $repository = $manager->getRepository('KubrickGalleryBundle:Album');
            $album = $repository->findOneById($item['album']);
            if(!$album) continue;
            $image ->setAlbum($album);
            $image ->setUrl($item['url']);
        	$image ->setName($item['name']);
        	$image ->setDescription($item['description']);
        	$manager->persist($image);
        }
        $manager->flush();
    }
}