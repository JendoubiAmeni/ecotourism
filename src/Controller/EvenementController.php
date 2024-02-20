<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    #[Route('/admin/evenement/ajouter', name: 'app_add_evenement')]

    public function Add(Request  $request , ManagerRegistry $doctrine ,SluggerInterface $slugger) : Response {

        $Evenement =  new Evenement() ;
        $form =  $this->createForm(EvenementType::class,$Evenement) ;
     
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $brochureFile = $form->get('image')->getData();
            //$file =$Evenement->getImage();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            //$uploads_directory = $this->getParameter('upload_directory');
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            //$fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Evenement->setImage(($newFilename));
            $Evenement = $form->getData();
            $em= $doctrine->getManager() ;
            $em->persist($Evenement);
            $em->flush();
            return $this ->redirectToRoute('app_list_evenement') ;
        }
        return $this->render('admin/ajouterEvenement.html.twig' , [
            'eventForm' => $form->createView()
        ]) ;
    }

    #[Route('/admin/evenement/liste', name: 'app_list_evenement')]
    public function AfficheEvenement (EvenementRepository $repo   ): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Evenement::class) ;
        $Evenement = $repo->findAllOrderedDesc();
        return $this->renderForm('admin/listeEvenement.html.twig' , [
            'Evenement' => $Evenement ,
            'ajoutA' => $Evenement
        ]) ;
    }
   
    #[Route('/admin/evenement/delete/{id}', name: 'admin_delete_evenement')]
    public function Delete($id,EvenementRepository $repository , ManagerRegistry $doctrine) : Response {
        $Evenement=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Evenement);
        $em->flush();
        return $this->redirectToRoute("app_list_evenement") ;

    }
    #[Route('/admin/evenement/modifier/{id}', name: 'admin_update_evenement')]
    function update(EvenementRepository $repo,$id,Request $request , ManagerRegistry $doctrines,SluggerInterface $slugger){
        $Evenement = $repo->find($id) ;
        $form=$this->createForm(EvenementType::class,$Evenement) ;
       
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $brochureFile = $form->get('image')->getData();
            //$file =$Evenement->getImage();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            //$uploads_directory = $this->getParameter('upload_directory');
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            //$fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Evenement->setImage(($newFilename));
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this ->redirectToRoute('app_list_evenement') ;
        }
        return $this->render('admin/ajouterEvenement.html.twig' , [
            'eventForm' => $form->createView()
        ]) ;

    }
    #[Route('/event', name: 'app_event')]
    public function event(EvenementRepository $repo ): Response
    {
        $Evenement=$repo->findAll() ;
        return $this->renderForm('client/event.html.twig' , [
            'event' => $Evenement ,
           
        ]) ;
    }
    // #[Route('/participation/{id}', name: 'app_participants')]
    // public function participants($id, EvenementRepository $repo): Response
    // {
    //     $event = $repo->find($id);
    //     return $this->render('client/participants.html.twig', [
    //         'singleEvent' => $event ,
           
    //     ]) ;
    // }
  
}

