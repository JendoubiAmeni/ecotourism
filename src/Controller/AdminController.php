<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Entity\Users;
use App\Security\AdminAuthenticator;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionType;

class AdminController extends AbstractController
{
    #[Route('/admin/index', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route(path: '/admin/login', name: 'app_admin_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('admin/security/connexion.html.twig', ['email' => $lastUsername, 'error' => $error]);
    }
    #[Route('/admin/reset', name: 'app_admin_reset')]
    public function reset(): Response
    {
        return $this->render('admin/security/reset.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/reservation', name: 'app_reservationManagement')]
    public function reservationManagement(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/Addproduct', name: 'app_add_product')]
    public function addProduct(): Response
    {
        return $this->render('admin/ajouterProduit.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/listProduct', name: 'app_list_product')]
    public function listProduct(): Response
    {
        return $this->render('admin/listeProduits.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/AddCategorie', name: 'app_add_Categorie')]
    public function addCategorie(): Response
    {
        return $this->render('admin/ajouterCategorie.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/partenariats', name: 'app_partenariatManagement')]
    public function partenariatManagement(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/initiative', name: 'app_initiativeManagement')]
    public function initiativeManagement(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/destination', name: 'app_destinationManagement')]
    public function destinationManagement(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/destination/ajouter', name: 'app_add_destination')]
    public function AjouterDestination(): Response
    {
        return $this->render('admin/ajouterDestination.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/destination/liste', name: 'app_list_destination')]
    public function ListeDestination(): Response
    {
        return $this->render('admin/listeDestination.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
 

   

    #[Route('/admin/list', name: 'app_admin_list')]
    public function listUsers()
    {
    }
    #[Route('/admin/list/block/{id}', name: 'app_edit_block')]
    public function editUser()
    {
    }
    #[Route('/admin/list/delete/{id}', name: 'app_delete_user')]
    public function delete()
    {
    }
    #[Route('/admin/listAvis', name: 'app_admin_list_avis')]
    public function listAvis(): Response
    {
        return $this->render('admin/listeAvis.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/listSensibilisation', name: 'app_admin_education')]
    public function listEducation(): Response
    {
        return $this->render('admin/liste.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/search', name: 'search_users')]
    public function searchUsers()
    {
    }
    #[Route('/admin/sensibilisation/ajouter', name: 'app_add_sensibilisation')]
    public function AjouterSensibilisation(): Response
    {
        return $this->render('admin/ajouterSensibilisation.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/sensibilisation/liste', name: 'app_list_sensibilisation')]
    public function ListeSensibilisation(): Response
    {
        return $this->render('admin/listeSensibilisation.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/quiz/ajouter', name: 'app_add_quiz')]
    public function AjouterQuiz(): Response
    {
        return $this->render('admin/ajouterQuiz.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/quiz/liste', name: 'app_list_quiz')]
    public function ListeQuiz(): Response
    {
        return $this->render('admin/listeQuiz.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
