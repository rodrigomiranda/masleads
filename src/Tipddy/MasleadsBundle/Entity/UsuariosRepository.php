<?php
 namespace Tipddy\MasleadsBundle\Entity;
 
 use Doctrine\ORM\EntityRepository;
 
 
 class UsuariosRepository extends EntityRepository 
 {
       public function buildQueryOrmAdapter($idOrganizacion)
       {
          $em = $this->getEntityManager();
          
          $query = $em->createQueryBuilder()
                        ->select('o')
                        ->from('TipddyMasleadsBundle:Usuarios', 'o')
                        ->where('o.organizacion = :idOrganizacion')
                        ->orderBy('o.id', 'DESC')                                                
                        ->setParameter('idOrganizacion', $idOrganizacion);
                        
          return $query;
       
       }
      
 
 }