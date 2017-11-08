<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 31/10/2017
 * Time: 11:32
 */

namespace AppBundle\Controller\Rest;

use AppBundle\Repository\EmplacementRepository;
use AppBundle\Entity\Emplacement;
use Doctrine\ORM\EntityManager;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\FOSRestBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;


class EmplacementsController extends FOSRestController
{

    private $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em= $entityManager;
    }


    public function getEmplacementsAction(){

        $emplacements = $this->em->getRepository('AppBundle:Emplacement')->findAll();

        if (empty($emplacements)){
            return array("code" => "404", "message" => "Not Found");
        }

        $result = [];

        foreach ($emplacements as $emplacement){

            $result[] = [
                "id_emplacement" => $emplacement->getIdEmplacement() ,
                "name_emplacement" => $emplacement->getNameEmplacement() ,
                "price_emplacement" => $emplacement->getPriceEmplacement() ,
                "surface_emplacement" => $emplacement->getSurfaceEmplacement() ,
                "nb_max_persons_emplacement" => $emplacement->getNbMaxPersonsEmplacement() ,
                "nb_rooms_emplacement" => $emplacement->getNbRoomsEmplacement() ,
                "lat_emplacement" => $emplacement->getLatEmplacement() ,
                "lng_emplacement" => $emplacement->getLngEmplacement()
            ];

        }

        return array("Emplacements" => $result);

    }

    public function getEmplacementAction($id){
        $emplacement = $this->em->getRepository('AppBundle:Emplacement')->find($id);
        if (empty($emplacement)){
            return array("code" => "404", "message" => "Not Found");
        }


        $result = [
            "id_emplacement" => $emplacement->getIdEmplacement() ,
            "name_emplacement" => $emplacement->getNameEmplacement() ,
            "price_emplacement" => $emplacement->getPriceEmplacement() ,
            "surface_emplacement" => $emplacement->getSurfaceEmplacement() ,
            "nb_max_persons_emplacement" => $emplacement->getNbMaxPersonsEmplacement() ,
            "nb_rooms_emplacement" => $emplacement->getNbRoomsEmplacement() ,
            "lat_emplacement" => $emplacement->getLatEmplacement() ,
            "lng_emplacement" => $emplacement->getLngEmplacement()
        ];


        return $result;
    }
}