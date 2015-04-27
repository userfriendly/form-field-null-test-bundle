<?php

namespace CiscoSystems\FormFieldNullTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class EmployeeType extends AbstractType
{
  public function buildForm( FormBuilderInterface $builder, array $options )
  {
    $builder->add( 'name', null, array(
                    'label' => 'Name',
                    'trim' => true,
                    'required' => true,
                  ));
    $builder->add( 'vendor', null, array(
                    'placeholder' => 'Select a vendor:',
                    'required' => false,
                    'empty_data' => null,
                  ));
  }

  public function getName()
  {
    return 'employee';
  }

  public function getDefaultOptions( array $options )
  {
    return array(
      'data_class' => 'CiscoSystems\FormFieldNullTestBundle\Entity\Employee',
    );
  }
}
