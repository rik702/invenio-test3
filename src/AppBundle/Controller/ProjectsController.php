<?php

namespace AppBundle\Controller;

use AppBundle\Entity\IvoProject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectsController extends Controller
{
    /**
     *@Route("/projects",name="projects")
     */
    public function listAction()
    {
        $waterCo = $this->getDoctrine()
            ->getRepository('AppBundle:IvoWaterco')
            ->findOneBy(['ivoWatercoId' => '2']);
        // ->findAll();
        //
        $WaterCoName = $waterCo->getIvoWatercoName();
        //
        //dump($WaterCoName);
        dump($waterCo);

        $Projects = $this->getDoctrine()
            ->getRepository('AppBundle:IvoProject')
            ->findBy(array('ivoWatercoId' => $waterCo->getIvoWatercoId()));

        dump($Projects);

        $Loggers = $this->getDoctrine()
            ->getRepository('AppBundle:IvoLoggerLocation')
            ->findAll();
        dump($Loggers);

   		return $this->render('projects\projects.html.twig',
            array("WaterCoName" =>$WaterCoName,
                "Projects" =>$Projects,
                "Loggers" =>$Loggers
        ));
    	// return $this->render('projects.html.twig', array("addressName"=>$waterCo->getIvoWatercoName()));
      // return $this->render('InvenioBundle:Default:index.html.twig',Array("addressName"=>$address->getIvoName()));
    }

    /**
     *@Route("/projects/{projID}",name="projects_project")
     */
    public function detailAction($projID)
    {
        $waterCo = $this->getDoctrine()
            ->getRepository('AppBundle:IvoWaterco')
            ->findOneBy(['ivoWatercoId' => '2']);
        // ->findAll();
        //
        $WaterCoName = $waterCo->getIvoWatercoName();
        //
        //dump($WaterCoName);
        dump($waterCo);

        $Projects = $this->getDoctrine()
            ->getRepository('AppBundle:IvoProject')
            ->findBy(array('ivoProjectId' => $projID));

        dump($Projects);

        $Loggers = $this->getDoctrine()
            ->getRepository('AppBundle:IvoLoggerLocation')
            ->findAll();
        dump($Loggers);

        return $this->render('projects\projects.html.twig',
            array("WaterCoName" =>$WaterCoName,
                "Projects" =>$Projects,
                "Loggers" =>$Loggers
            ));
        // return $this->render('projects.html.twig', array("addressName"=>$waterCo->getIvoWatercoName()));
        // return $this->render('InvenioBundle:Default:index.html.twig',Array("addressName"=>$address->getIvoName()));
    }

}
