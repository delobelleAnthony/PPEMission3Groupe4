<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Entity\Stage;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LamMdlBundle:Default:index.html.twig');
    }
    
    public function testAction(){
        $stage = new Stage();
        $stage->setIdFormation(1);
        $stage->setNbParticipantsMax(25);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($stage);
        $em->flush();
        
        echo "Creation d'un stage";
        
        return $this->render('LamMdlBundle:Default:index.html.twig');
    
    }
}
