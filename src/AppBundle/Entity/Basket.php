<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Basket
 *
 * @ORM\Table(name="basket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BasketRepository")
 */
class Basket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\OneToOne(targetEntity="User", inversedBy="basket")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="datetime")
     */
    private $datecreation;

    
    /**
    * @ORM\OneToOne(targetEntity="AnOrder", mappedBy="basket")
    */
    private $theorder;
    
    
    /**
    * @ORM\OneToMany(targetEntity="ChoiceBasket", mappedBy="basket")
    */
    private $choices;

    public function __construct() {
        
        $this->choices = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Basket
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Basket
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Basket
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set theorder
     *
     * @param \AppBundle\Entity\AnOrder $theorder
     *
     * @return Basket
     */
    public function setTheorder(\AppBundle\Entity\AnOrder $theorder = null)
    {
        $this->theorder = $theorder;

        return $this;
    }

    /**
     * Get theorder
     *
     * @return \AppBundle\Entity\AnOrder
     */
    public function getTheorder()
    {
        return $this->theorder;
    }

    /**
     * Add choice
     *
     * @param \AppBundle\Entity\ChoiceBasket $choice
     *
     * @return Basket
     */
    public function addChoice(\AppBundle\Entity\ChoiceBasket $choice)
    {
        $this->choices[] = $choice;

        return $this;
    }

    /**
     * Remove choice
     *
     * @param \AppBundle\Entity\ChoiceBasket $choice
     */
    public function removeChoice(\AppBundle\Entity\ChoiceBasket $choice)
    {
        $this->choices->removeElement($choice);
    }

    /**
     * Get choices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChoices()
    {
        return $this->choices;
    }
}
