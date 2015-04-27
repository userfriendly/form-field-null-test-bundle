<?php

namespace CiscoSystems\FormFieldNullTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CiscoSystems\FormFieldNullTestBundle\Entity\Employee;

class EmployeeController extends Controller
{
    public function indexAction( Request $request )
    {
        // Grab employees and vendors
        $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository( 'CiscoSystemsFormFieldNullTestBundle:Employee' )->findAll();
        $vendors = $em->getRepository( 'CiscoSystemsFormFieldNullTestBundle:Vendor' )->findAll();
        // Create employee entity instance and form
        $employee = new Employee();
        $form = $this->createForm( 'employee', $employee );
        // Process form
        if ( $request->get( 'employee' ))
        {
            $form->bind( $request );
            if ( $form->isValid() )
            {
                $em->persist( $employee );
                $em->flush();
                return $this->redirect( $this->generateUrl( 'employees' ));
            }
        }
        return $this->render( 'CiscoSystemsFormFieldNullTestBundle:Employee:index.html.twig', array(
            'employees' => $employees,
            'vendors' => $vendors,
            'form' => $form->createView(),
        ));
    }
}
