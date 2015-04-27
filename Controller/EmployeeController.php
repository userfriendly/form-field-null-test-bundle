<?php

namespace CiscoSystems\FormFieldNullTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmployeeController extends Controller
{
    public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository( 'CiscoSystemsFormFieldNullTestBundle:Employee' )->findAll();
        $vendors = $em->getRepository( 'CiscoSystemsFormFieldNullTestBundle:Vendor' )->findAll();
        return $this->render( 'CiscoEmployeeBundle:Employee:index.html.twig', array(
            'employees' => $employees,
            'vendors' => $vendors,
        ));
    }

    public function saveAction( Request $request )
    {
    }
}
