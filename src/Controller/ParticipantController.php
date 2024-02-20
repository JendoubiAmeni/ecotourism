<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\ParticipantType;
use App\Repository\ParticipantRepository;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

class ParticipantController extends AbstractController
{
    #[Route('/participant', name: 'app_participant')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'ParticipantController',
        ]);
    }

    #[Route('/participation/{id}', name: 'app_participants')]
    public function Add(Request $request, ManagerRegistry $doctrine, $id, EvenementRepository $repo,FlashBagInterface $flashBag): Response
    {
        $Participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $Participant);
        $form->add('participater', SubmitType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $Participant = $form->getData();
            
            // Récupérer l'événement correspondant à l'ID
            $event = $repo->find($id);
            if (!$event) {
                throw $this->createNotFoundException('L\'événement avec l\'ID ' . $id . ' n\'a pas été trouvé.');
            }
            
            // Assigner l'événement au participant
            $Participant->setEvenements($event);
            
            $em = $doctrine->getManager();
            $em->persist($Participant);
            $em->flush();
            $this->addFlash('success', 'Vous avez participé à l\'événement avec succès!');
            
            return $this->redirectToRoute('app_event');
        }
        
        $event = $repo->find($id);
        
        return $this->render('client/participants.html.twig', [
            'formParticipant' => $form->createView(),
            'singleEvent' => $event,
        ]);
    }


    #[Route('/participants/liste', name: 'afficher_participant')]
    public function AfficheParticipant (ParticipantRepository $repo   ): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Participant::class) ;
        $Participant=$repo->findAll() ;
        return $this->render('admin/listeParticipants.html.twig' , [
            'Participant' => $Participant ,
            'ajoutA' => $Participant
        ]) ;
    }

    #[Route('/delete_adh/{id}', name: 'delete_adh')]
    public function Delete($id,ParticipantRepository $repository , ManagerRegistry $doctrine) : Response {
        $Participant=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Participant);
        $em->flush();
        return $this->redirectToRoute("afficher_participant") ;

    }
    #[Route('/update_adh/{id}', name: 'update_adh')]
    function update(ParticipantRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $Participant = $repo->find($id) ;
        $form=$this->createForm(ParticipantType::class,$Participant) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $Participant = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_participant') ;
        }
        return $this->render('participant/update.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }
}
