<?php

namespace CiscoSystems\FormFieldNullTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="test__vendor")
 */
class Vendor
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
     * @ORM\OneToMany(targetEntity="CiscoSystems\FormFieldNullTestBundle\Entity\Employee", mappedBy="vendor")
     */
    protected $employees;

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
     * @param unknown_type $name
     * @return \CiscoSystems\FormFieldNullTestBundle\Entity\Vendor
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}
