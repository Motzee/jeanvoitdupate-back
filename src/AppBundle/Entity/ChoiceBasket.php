<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChoiceBasket
 *
 * @ORM\Table(name="choice_basket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChoiceBasketRepository")
 */
class ChoiceBasket
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
    * @ORM\ManyToOne(targetEntity="Product", inversedBy="inchoices")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    private $productId;
    
    
    
    
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float")
     */
    private $quantity;


    /**
    * @ORM\ManyToOne(targetEntity="Basket", inversedBy="choices")
    * @ORM\JoinColumn(name="basket_id", referencedColumnName="id")
    */
    private $basket;
    
    

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
     * Set productId
     *
     * @param integer $productId
     *
     * @return ChoiceBasket
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return ChoiceBasket
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set basketId
     *
     * @param integer $basketId
     *
     * @return ChoiceBasket
     */
    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;

        return $this;
    }

    /**
     * Get basketId
     *
     * @return int
     */
    public function getBasketId()
    {
        return $this->basketId;
    }

    /**
     * Set basket
     *
     * @param \AppBundle\Entity\Basket $basket
     *
     * @return ChoiceBasket
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
