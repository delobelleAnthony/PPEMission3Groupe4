<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lam\MdlBundle\Entity\Stage;
use Lam\MdlBundle\Entity\Inscription;
use Lam\MdlBundle\Form\Type\InscriptionType;
use Lam\MdlBundle\Entity\Formation;
use Lam\MdlBundle\Entity\Association;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LamMdlBundle:Default:index.html.twig');
    }
	
	 public function testAction(){
        $formation = new Association();
        $formation->setId(1);
        $inscription = new Inscription();
        $inscription->setIdAssociation($formation->getId());
        $inscription->setIdFormation(1);
        $inscription->setIdStage(1);
        $inscription->setNbInscrit(23);
             
        $stage = new Stage();
        $stage->setIdFormation(1);
        $stage->setNbParticipantsMax(25);
        $stage->setIdFormation(1);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($stage);
        $em->persist($inscription);
        $em->flush();
        
        echo "Creation d'un stage";
        
        return $this->render('LamMdlBundle:Default:index.html.twig');
    
    }
	
	 public function addAction($idFormation, $nbPlacesRestantes){ 
         
         $message = '';
         $em = $this->getDoctrine()->getEntityManager();
         $formation = $em->getRepository('LamMdlBundle:formation')->find($idFormation);
         
         $inscription = new Inscription();
         $request = $this->getRequest();
         $inscription->setIdFormation($idFormation);
        
         $tableau = array();
        for($i = 1; $i <= $nbPlacesRestantes; $i++){
            array_push($tableau, $i);
        }

        $form = $this->createForm(new InscriptionType($tableau), $inscription);
       
        if($formation !== null){
            $date = date_parse( $formation->getDate()->format('Y-m-d H:i:s')) ;
            $message = "La formation se déroulera le " .$date['day']. "/" .$date['month']. "/" . $date['year']. " à " . $formation->getHoraire() . " dans la salle " . $formation->getSalle() ;
            if($formation->getAdresse() != ""){
                $message .=  " dont l'adresse est ". $formation->getAdresse();
            }
        }
        
        if ($request->getMethod() == "POST"){
            $form->bindRequest($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                
                
                
                $em->persist($inscription);
                
               
                
                
                $idFormation = $inscription->getIdFormation();
                
                $formation = $em->getRepository('LamMdlBundle:formation')->find($idFormation);
                
                if(($formation2 = $formation->getLaFormationSport()) != null ){
                    $message = $formation2->getTitre();
                    $horaire = $formation->getHoraire();
                    $salle = $formation->getSalle();
                }
                else{
                    $formation2 = $formation->getLaFormationInformatique();
                    $message = $formation2->getTitre();
                    $horaire = $formation->getHoraire();
                    $salle = $formation->getSalle();
                }
;
                
                $inscription->setNbInscrit($inscription->getNbInscrit()+1);
                $em->flush();
                $nb = $inscription->getNbInscrit();
               
               return $this->container->get('templating')->renderResponse('LamMdlBundle:Formation:validation.html.twig' , 
                       array('nb'=>$nb,
                           'message'=>$message,
                           'horaire'=>$horaire,
                           'salle'=>$salle));
            }
        }
        
        return $this->container->get('templating')->renderResponse('LamMdlBundle:Formation:inscription.html.twig',
                array(
                    'form'=>$form->createView(),
                    'message'=>$message,
                    'idStage'=>$idFormation,
                    ));
    }
    
    
}
