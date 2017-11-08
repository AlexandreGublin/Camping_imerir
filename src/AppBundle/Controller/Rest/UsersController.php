<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 02/11/2017
 * Time: 14:04
 */

namespace AppBundle\Controller\Rest;

use AppBundle\AppBundle;
use AppBundle\Repository\UserRepository;
use AppBundle\Entity\User;

use AppBundle\Repository\TokenRepository;
use AppBundle\Entity\Token;

use Doctrine\ORM\EntityManager;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\FOSRestBundle;
use FOS\UserBundle\Model\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;


class UsersController extends FOSRestController
{

    private $em;
    private $userManager;

    public function __construct(EntityManager $entityManager, UserManager $userManager)
    {
        $this->em= $entityManager;
        $this->userManager = $userManager;
    }


    // Send all users => GET http://localhost:8888/Symfony/Au_Camping/web/app_dev.php/api/users
    public function getUsersAction(){

    $users = $this->em->getRepository('AppBundle:User')->findAll();

    if (empty($users)){
        return array("code" => "404", "message" => "Not Found");
    }

    $result = [];

    foreach ($users as $user){
        $result[] = [
            "id_customer" => $user->getIdUser() ,
            "name_customer" => $user->getUsername() ,
            "first_name_customer" => $user->getFirstNameUser() ,
            "email_customer" => $user->getEmail(),
            "address_customer" => $user->getAddressUser() ,
            "postal_code_customer" => $user->getPostalCodeUser() ,
            "tel_customer" => $user->getTelUser()
        ];

    }

    return array("Customers" => $result);

    }

    // create user => PUT http://localhost:8888/Symfony/Au_Camping/web/app_dev.php/api/users/@id
    public function getUserAction($id){
        $user = $this->em->getRepository('AppBundle:User')->find($id);
        if (empty($user)){
            return array("code" => "404", "message" => "Not Found");
        }


        $result = [
            "id_customer" => $user->getIdUser() ,
            "name_customer" => $user->getUsername() ,
            "first_name_customer" => $user->getFirstNameUser() ,
            "email_customer" => $user->getEmail(),
            "address_customer" => $user->getAddressUser() ,
            "postal_code_customer" => $user->getPostalCodeUser() ,
            "tel_customer" => $user->getTelUser()
        ];


        return $result;
    }

    // create user => PUT http://localhost:8888/Symfony/Au_Camping/web/app_dev.php/api/user
    // Request => name_customer, first_name_customer, password_customer, email_customer, address_customer, postal_code_customer, tel_user
    public function putUserAction(Request $request) {

        try{
            $user = $this->userManager->createUser();
            $user->setUsername($request->get('name_customer'));
            $user->setEmail($request->get('email_customer'));
            $user->setPassword($request->get("password_customer"));

            $this->userManager->updateUser($user);

            // Is user was created
            if($user->getIdUser()){

                $token = new Token();
                $token->setIdUser($user);
                $token->setLabelToken(bin2hex(random_bytes(35)));

                $this->em->persist($token);
                $this->em->flush();

                if($token->getIdToken()){
                    return array("token" => $token->getLabelToken());
                }
                else {
                    //$this->em->remove($token);
                    $this->em->remove($user);
                    $this->em->flush();
                    return  array("code" =>  "400", "message" => "Failed generate token.");
                }

            }
            else {
                $this->em->remove($user);
                $this->em->flush();
                return array("code" => "400", "message" => "User not created.");
            }



        }catch (Exception $e){
            return array("code" => "400", "message" => "Form is Invalid, ".$e->getTrace());
        }

    }

    // Update user => POST http://localhost:8888/Symfony/Au_Camping/web/app_dev.php/api/users/@id
    // Request => name_customer, first_name_customer, password_customer, email_customer, address_customer, postal_code_customer, tel_user
   public function postUserAction($id, Request $request){
        $user = $this->em->getRepository('AppBundle:User')->find($id);

        if (empty($user)) {
            return array("code" => "404", "message" => "Not Found");
        }

        return array("code" => "400", "message" => "Form is Invalid");
    }

}