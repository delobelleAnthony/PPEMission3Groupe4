<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Stage
 *
 * @ORM\Table(name="stage")
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\StageRepository")
 */
class Stage
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
     * @var integer $idFormation
     * 
     * @ORM\Column(name="idFormation", type="integer")
     */
    private $idFormation;

    /**
     * @var integer $nbParticipantsMax
     *
     * @ORM\Column(name="nbParticipantsMax", type="integer")
     */
    private $nbParticipantsMax;
    
    /**
    * @ORM\OneToMany(targetEntity="Inscription", mappedBy="id", cascade={"remove", "persist"})
    */
    private $lesInscriptions;

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
     * Set idFormation
     *
     * @param integer $idFormation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;
    }

    /**
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set nbParticipantsMax
     *
     * @param integer $nbParticipantsMax
     */
    public function setNbParticipantsMax($nbParticipantsMax)
    {
        $this->nbParticipantsMax = $nbParticipantsMax;
    }

    /**
     * Get nbParticipantsMax
     *
     * @return integer 
     */
    public function getNbParticipantsMax()
    {
        return $this->nbParticipantsMax;
    }
    
    public function __construct() {
        ;
    }

    /**
     * Add lesInscriptions
     *
     * @param Lam\MdlBundle\Entity\Inscription $lesInscriptions
     */
    public function addInscription(\Lam\MdlBundle\Entity\Inscription $lesInscriptions)
    {
        $this->lesInscriptions[] = $lesInscriptions;
    }

    /**
     * Get lesInscriptions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLesInscriptions()
    {
        return $this->lesInscriptions;
    }
}