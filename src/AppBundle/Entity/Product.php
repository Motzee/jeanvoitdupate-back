<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="initialstock", type="float")
     */
    private $initialstock;

    /**
     * @var float
     *
     * @ORM\Column(name="currentstock", type="float")
     */
    private $currentstock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateperemption", type="datetime")
     */
    private $dateperemption;

    
    /**
     * @var string
     *
     * @ORM\Column(name="urlphoto", type="string", length=255)
     */
    private $urlphoto;
    
    
    /**
     * @var bool
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;


    /**
    * @ORM\OneToMany(targetEntity="ChoiceBasket", mappedBy="productId")
    */
    private $inchoices;

    public function __construct() {

        $this->inchoices = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set initialstock
     *
     * @param float $initialstock
     *
     * @return Product
     */
    public function setInitialstock($initialstock)
    {
        $this->initialstock = $initialstock;

        return $this;
    }

    /**
     * Get initialstock
     *
     * @return float
     */
    public function getInitialstock()
    {
        return $this->initialstock;
    }

    /**
     * Set currentstock
     *
     * @param float $currentstock
     *
     * @return Product
     */
    public function setCurrentstock($currentstock)
    {
        $this->currentstock = $currentstock;

        return $this;
    }

    /**
     * Get currentstock
     *
     * @return float
     */
    public function getCurrentstock()
    {
        return $this->currentstock;
    }

    /**
     * Set dateperemption
     *
     * @param \DateTime $dateperemption
     *
     * @return Product
     */
    public function setDateperemption($dateperemption)
    {
        $this->dateperemption = $dateperemption;

        return $this;
    }

    /**
     * Get dateperemption
     *
     * @return \DateTime
     */
    public function getDateperemption()
    {
        return $this->dateperemption;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Product
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set urlphoto
     *
     * @param string $urlphoto
     *
     * @return Product
     */
    public function setUrlphoto($urlphoto)
    {
        $this->urlphoto = $urlphoto;

        return $this;
    }

    /**
     * Get urlphoto
     *
     * @return string
     */
    public function getUrlphoto()
    {
        return $this->urlphoto;
    }

    /**
     * Add inchoice
     *
     * @param \AppBundle\Entity\ChoiceBasket $inchoice
     *
     * @return Product
     */
    public function addInchoice(\AppBundle\Entity\ChoiceBasket $inchoice)
    {
        $this->inchoices[] = $inchoice;

        return $this;
    }

    /**
     * Remove inchoice
     *
     * @param \AppBundle\Entity\ChoiceBasket $inchoice
     */
    public function removeInchoice(\AppBundle\Entity\ChoiceBasket $inchoice)
    {
        $this->inchoices->removeElement($inchoice);
    }

    /**
     * Get inchoices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInchoices()
    {
        return $this->inchoices;
    }
}
