<?php
 namespace Tipddy\MasleadsBundle\Entity;
 
 use Doctrine\ORM\EntityRepository;
 
 
 class OrganizacionesRepository extends EntityRepository 
 {
       public function buildQueryOrmAdapter()
       {
          $em = $this->getEntityManager();
          
          $query = $em->createQueryBuilder()
                        ->select('o')
                        ->from('TipddyMasleadsBundle:Organizaciones', 'o')
                        ->orderBy('o.id', 'DESC'); 
       
          return $query;
       
       }
 
 }