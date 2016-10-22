<?php

namespace Kubrick\GalleryBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AlbumRepository extends EntityRepository
{
    public function findAllByImageLimit()
    {
		$query = $this->getEntityManager()
                ->createQuery('SELECT a FROM Kubrick\GalleryBundle\Entity\Album a');
        //$query->setParameter(1, $category->getId());
 
        return $query->getResult();
    }
}