<?php

namespace Lam\MdlBundle\Form\Type;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Inscription;


class InscriptionType extends AbstractType{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('idAssociation')
            ->add('nbInscrit')
            ->add('idStage', 'text', array(data));
            
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
