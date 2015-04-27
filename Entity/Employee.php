<?php

namespace CiscoSystems\FormFieldNullTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="test__employee")
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="CiscoSystems\FormFieldNullTestBundle\Entity\Vendor", inversedBy="employees")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id", nullable=true)
     */
    protected $vendor;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \CiscoSystems\FormFieldNullTestBundle\Entity\Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param \CiscoSystems\FormFieldNullTestBundle\Entity\Vendor $vendor
     */
    public function setVendor( Vendor $vendor = null )
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Get string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
