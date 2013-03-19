<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\InscriptionType;
use Lam\MdlBundle\Entity\Inscription;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Lam\MdlBundle\Entity\FormationInformatique;




class FormationInformatiqueController extends Controller
{
    
    public function listeAction()
    {$em = $this->getDoctrine()->getEntityManager();
        $listeformationinfo = $em->getRepository('LamMdlBundle:formationinformatique')->findAll();
                      
            return $this->render('LamMdlBundle:FormationInformatique:listefi.html.twig',array('listeformationinfo' => $listeformationinfo));
    }
    
    public function contenuinfoAction($num)
    {$contenuformationinfo = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:formationinformatique')
                      ->contenuFormationInformatique($num);
            return $this->render('LamMdlBundle:FormationInformatique:contenufi.html.twig',array('contenuformationinfo' => $contenuformationinfo));
    }
    
     public function stageAction($num)
    {$lesStages = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:formation')
                      ->listestageinfo($num);
    $em = $this->getDoctrine()->getEntityManager();
        $laformation = $em->getRepository('LamMdlBundle:formationinformatique')->find($num);
            return $this->render('LamMdlBundle:Formation:listeinformatique.html.twig',array('lesStages' => $lesStages,'laF' => $laformation));
    }
    
  
    
    public function addAction($num){
        
        $inscription = new Inscription();
        $request = $this->getRequest();
        
        $form = $this->createForm(new InscriptionType(), $inscription);
        
        $message = "";
        
        if ($request->getMethod() == "POST"){
            $form->bindRequest($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($inscription);
                $em->flush();
               
                
                $inscription = new Inscription();
                $form = $this->createForm(new InscriptionType(), $inscription);
            }
            
            
        }
        
        return $this->container->get('templating')->renderResponse('LamMdlBundle:Default:inscription.html.twig',
                array(
                    'form'=>$form->createView(),
                    'message'=>$message,
                    'idStage'=>$num
                    ));
    }
}
