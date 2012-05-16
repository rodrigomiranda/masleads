<?php
 namespace Tipddy\MasleadsBundle\Entity;
 
 use Doctrine\ORM\EntityRepository;
 
 
 class UsuariosRepository extends EntityRepository 
 {
       public function buildQueryOrmAdapter()
       {
          $em = $this->getEntityManager();
          
          $query = $em->createQueryBuilder()
                        ->select('o')
                        ->from('TipddyMasleadsBundle:Usuarios', 'o')
                        ->orderBy('o.id', 'DESC'); 
       
          return $query;
       
       }
 
 }