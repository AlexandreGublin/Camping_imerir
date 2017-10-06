<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

/* ROUTES WEB SERVICES





// ajouter un nouveau client
PUT /customer
{
  entree ->
  'name_customer' : "gublin",
  'first_name_customer' : "alexandre",
  'email_customer' : "alexandre.gublin..."
  'tel_customer' : "0770188132"
  'adress_customer' : "2 rue Alfred Kastler",
  'postal_code_customer' : 66280,
  'id_country' : 2
}
{
  sortie ->
  retourner l'objet customer
}

// renvoyer la liste de tout les clients
GET /customers
{
  sortie ->
  retourne la liste d'objet de tout les clients
}

// renvoyer la liste d'un client'
GET /customer/@id_customer
{
  sortie ->
  retourne l'objet customer
}

// modifier un client
POST /customer/@id_customer
{
  'name_customer' : "gublin",
  'first_name_customer' : "alexandre",
  'email_customer' : "alexandre.gublin..."
  'tel_customer' : "0770188132"
  'adress_customer' : "2 rue Alfred Kastler",
  'postal_code_customer' : 66280,
  'id_country' : 2
}

// supprimer un client
DELETE /customer/@id_customer
{
  Retourne la liste de tous les clients (fonction all de customer)
}





// créer un nouvel emplacement
PUT /emplacement
{
  entree ->
  'name_emplacement' : "mobil home 256",
  'first_name_customer' : "alexandre",
  'email_customer' : "alexandre.gublin..."
  'tel_customer' : "0770188132"
  'adress_customer' : "2 rue Alfred Kastler",
  'postal_code_customer' : 66280,
  'id_country' : 2
}
{
  sortie ->
  retourner l'objet customer
}

// renvoyer la liste de tous les emplacements
GET /emplacements
{
  sortie ->
  'id_emplacement' : 2,
  'id_type_emplacement', : 5 // si c'est un mobil home ou une caravane ...
  'coordinates_x_emplacement' : 34464,4534,
  'coordinates_y_emplacement' : 4345345,4212
}

// renvoyer la liste de tous les emplacements disponibles
GET /emplacements/available
{
  sortie ->
  'id_emplacement' : 2,
  'id_type_emplacement' : 5, // si c'est un mobil home ou une caravane ...
  'id_description_emplacement' : 3
}

//renvoyer la liste de toutes les réservations
GET /reservations
{
  sortie ->
  'id_reservation' : 2,
  'date_reservation' : "2017/01/28",
  'id_customer_reservation' = 3,
  'id_emplacement_reservation' : 4

}

// Réservé un emplacement
PUT /customer/@id_customer/emplacement/@id_emplacement/reserve
{
  sortie ->
  'id_reservation' : 456,
  'date_reservation' : "2017/01/28",
  'date_entry_reservation
  'id_customer_reservation' : 245, // ou mettre tout l'objet customer
  'id_emplacement_reservation' : 8   //ou mettre tout l'objet emplacement      
}



*/
}
