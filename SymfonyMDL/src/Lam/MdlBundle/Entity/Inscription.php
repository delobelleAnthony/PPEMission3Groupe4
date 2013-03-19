<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Inscription
 *
 * @ORM\Table(name="Inscription")
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\InscriptionRepository")
 */
class Inscription
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $idStage
     * @ORM\ManyToOne(targetEntity="Stage", inversedBy="id")
     * @ORM\JoinColumn(name="stage", referencedColumnName="id")
     */
    private $idStage;

    /**
     * @var integer $idAssociation
     * @ORM\ManyToOne(targetEntity="Association", inversedBy="id")
     * @ORM\JoinColumn(name="association", referencedColumnName="id")
     */
    private $idAssociation;

    /**
     * @var integer $nbInscrit
     *
     * @ORM\Column(name="nbInscrit", type="integer")
     */
    private $nbInscrit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idStage
     *
     * @param integer $idStage
     */
    public function setIdStage($idStage)
    {
        $this->idStage = $idStage;
    }

    /**
     * Get idStage
     *
     * @return integer 
     */
    public function getIdStage()
    {
        return $this->idStage;
    }

    /**
     * Set idAssociation
     *
     * @param integer $idAssociation
     */
    public function setIdAssociation($idAssociation)
    {
        $this->idAssociation = $idAssociation;
    }

    /**
     * Get idAssociation
     *
     * @return integer 
     */
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }

    /**
     * Set nbInscrit
     *
     * @param integer $nbInscrit
     */
    public function setNbInscrit($nbInscrit)
    {
        $this->nbInscrit = $nbInscrit;
    }

    /**
     * Get nbInscrit
     *
     * @return integer 
     */
    public function getNbInscrit()
    {
        return $this->nbInscrit;
    }
}