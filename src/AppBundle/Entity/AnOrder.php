<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnOrder
 *
 * @ORM\Table(name="an_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnOrderRepository")
 */
class AnOrder
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
    * @ORM\OneToOne(targetEntity="Basket", inversedBy="theorder")
    * @ORM\JoinColumn(name="basket_id", referencedColumnName="id")
    */
    private $basket;
    
    
    
    /**
     * @ORM\OneToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevalid", type="datetime")
     */
    private $datevalid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return AnOrder
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set datevalid
     *
     * @param \DateTime $datevalid
     *
     * @return AnOrder
     */
    public function setDatevalid($datevalid)
    {
        $this->datevalid = $datevalid;

        return $this;
    }

    /**
     * Get datevalid
     *
     * @return \DateTime
     */
    public function getDatevalid()
    {
        return $this->datevalid;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AnOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set basket
     *
     * @param \AppBundle\Entity\Basket $basket
     *
     * @return AnOrder
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

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return AnOrder
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
