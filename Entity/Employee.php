<?php

namespace CiscoSystems\FormFieldNullTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="CiscoSystems\EmployeeBundle\Entity\Vendor", inversedBy="employees")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id", nullable=true)
     */
    protected $vendor;

    /**
     * @return the unknown_type
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
     * @return \CiscoSystems\EmployeeBundle\Entity\Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param \CiscoSystems\EmployeeBundle\Entity\Vendor $vendor
     */
    public function setVendor( Vendor $vendor = null )
    {
        $this->vendor = $vendor;
        return $this;
    }
}
