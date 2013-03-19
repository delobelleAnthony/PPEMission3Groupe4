<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\AssociationRepository")
 */
class Association
{
     /**
    * @ORM\OneToMany(targetEntity="Inscription", mappedBy="id", cascade={"remove", "persist"})
    */
    private $lesInscriptions;
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $nom
     *
     * @ORM\Column(name="nom", type="text")
     */
    private $nom;


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
     * Set nom
     *
     * @param text $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return text 
     */
    public function getNom()
    {
        return $this->nom;
    }
    public function __construct()
    {
        $this->lesInscriptions = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function __toString() {
        return $this->nom;
    }
}