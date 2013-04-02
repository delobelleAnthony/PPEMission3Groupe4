<?php

namespace Lam\MdlBundle\Form\Type;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\Inscription;


class InscriptionType extends AbstractType{

    private $tableauNbMax;
    
    public function __construct($nbInscrits) {
        $this->tableauNbMax = $nbInscrits;
    }

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('idAssociation')
            ->add('nbInscrit', 'choice', array('choices'=>$this->tableauNbMax))            
            ->add('idFormation', 'hidden');
            
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Lam\MdlBundle\Entity\Inscription',
        );
    }

    public function getName()
    {
        return 'Inscription';
    }
}

?>
