<?php

namespace Frontend\TimesheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimesheetController extends Controller
{
    public function indexAction()
    {
        return $this->render('TimesheetBundle:Timesheet:index.html.twig');
    }
}
