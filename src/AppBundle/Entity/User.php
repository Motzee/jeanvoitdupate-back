<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
    
    
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

     
    /**
    * @ORM\OneToMany(targetEntity="Address", mappedBy="user")
    */
    private $adresses;

    
    /**
    * @ORM\OneToOne(targetEntity="Basket", mappedBy="user")
    */
    private $basket;
    
    
    public function __construct()
    {
        parent::__construct();
        
        $this->addresses = new ArrayCollection();
    }

    /**
     * Set defaultaddressId
     *
     * @param integer $defaultaddressId
     *
     * @return User
     */
    public function setDefaultaddressId($defaultaddressId)
    {
        $this->defaultaddress_id = $defaultaddressId;

        return $this;
    }

    /**
     * Get defaultaddressId
     *
     * @return integer
     */
    public function getDefaultaddressId()
    {
        return $this->defaultaddress_id;
    }
    

    /**
     * Add adress
     *
     * @param \AppBundle\Entity\Address $adress
     *
     * @return User
     */
    public function addAdress(\AppBundle\Entity\Address $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \AppBundle\Entity\Address $adress
     */
    public function removeAdress(\AppBundle\Entity\Address $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Set basket
     *
     * @param \AppBundle\Entity\Basket $basket
     *
     * @return User
     */
    public function setBasket(\AppBundle\Entity\Basket $basket = null)
    {
        $this->basket = $basket;

        return $this;
    }

    /**
     * Get basket
     *
     * @return \AppBundle\Entity\Basket
     */
    public function getBasket()
    {
        return $this->basket;
    }
}
