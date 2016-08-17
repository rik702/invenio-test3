<?php

namespace AppBundle\Controller;

use AppBundle\Entity\IvoProject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 *@Route("/projects",name="projects")
 */
class ProjectsController extends Controller
{
/**
 *@Route("",name="projects_list")
 */
    public function listAction()
    {
   		return $this->render('projects\projects.html.twig',
            array("WaterCoName" => $this->WaterCo()->getIvoWatercoName(),
                "Projects" => $this->getProjectsByWaterCoID(),
                "Project" => null
        ));
    }

    /**
     *@Route("/{projID}",name="projects_project_detail")
     */
    public function detailAction($projID)
    {
       return $this->render('projects\projectDetails.html.twig',
            array("WaterCoName" => $this->WaterCo()->getIvoWatercoName(),
                "Projects" => $this->getProjectsByWaterCoID(),
                "Project"=>$this->getProject($projID)
        ));
    }
    /**
     *@Route("/{projID}/batches",name="projects_project_batches")
     */
    public function batchesAction($projID)
    {
        return $this->render('projects\projectBatches.html.twig',
            array("WaterCoName" => $this->WaterCo()->getIvoWatercoName(),
                "Projects" => $this->getProjectsByWaterCoID(),
                "Project"=>$this->getProject($projID),
                "Batches"=>$this->getBatchesForProject($projID),
                "LoggerLocations"=>null
        ));
    }

    /**
     *@Route("/{projID}/maps",name="projects_project_maps")
     */
    public function mapsAction($projID)
    {
        return $this->render('projects\map.html.twig',
            array("WaterCoName" => $this->WaterCo()->getIvoWatercoName(),
                "Projects" => $this->getProjectsByWaterCoID(),
                "Project"=>$this->getProject($projID),
                "Batches"=>$this->getBatchesForProject($projID),
                "LoggerLocations"=>null
        ));
    }    private $watercoID = 2;
    
    private function waterCo() {
        return $this->getDoctrine()
            ->getRepository('AppBundle:IvoWaterco')
            ->findOneBy(['ivoWatercoId' => $this->watercoID]);
    }
    

    private function allprojects() { 
        $this->getDoctrine()
            ->getRepository('AppBundle:IvoProject')
            ->findAll();
    }

    private function getProjectsByWaterCoID() {
        return $this->getDoctrine()
            ->getRepository('AppBundle:IvoProject')
            ->findBy(array('ivoWatercoId' => $this->watercoID));
    }
    
    private function getProject($projID)
    {
        return $this->getDoctrine()
            ->getRepository('AppBundle:IvoProject')
            ->findOneBy(['ivoProjectId' => $projID]);
    }

    private function getBatchesForProject($projID) {
        return $this->getDoctrine()
            ->getRepository('AppBundle:IvoLoggerLocationBatch')
            ->findBy(['ivoProjectId' => $projID]);
    }
}
