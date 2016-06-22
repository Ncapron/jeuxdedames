<?php

namespace CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accueil
 */
class Accueil
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var string
     */
    private $bonjour;


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
     * Set titre
     *
     * @param string $titre
     * @return Accueil
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Accueil
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Accueil
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set bonjour
     *
     * @param string $bonjour
     * @return Accueil
     */
    public function setBonjour($bonjour)
    {
        $this->bonjour = $bonjour;

        return $this;
    }

    /**
     * Get bonjour
     *
     * @return string 
     */
    public function getBonjour()
    {
        return $this->bonjour;
    }
}
