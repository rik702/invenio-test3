<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerLocation
 *
 * @ORM\Table(name="ivo_logger_location")
 * @ORM\Entity
 */
class IvoLoggerLocation
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_type", type="string", nullable=true)
     */
    private $ivoLoggerLocationType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_waterco_provided_location_comments", type="string", nullable=true)
     */
    private $ivoWatercoProvidedLocationComments;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_gps_latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoGpsLatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_gps_longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoGpsLongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_gps_accuracy", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoGpsAccuracy;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_comm_pipe_length", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoCommPipeLength;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_comm_pipe_depth", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoCommPipeDepth;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_comm_pipe_diameter", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoCommPipeDiameter;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_location_flooded_at_deployment", type="string", nullable=true)
     */
    private $ivoLocationFloodedAtDeployment;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_location_flooded_at_retrieval", type="string", nullable=true)
     */
    private $ivoLocationFloodedAtRetrieval;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_planned_logger_type", type="string", nullable=true)
     */
    private $ivoPlannedLoggerType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_status", type="string", nullable=true)
     */
    private $ivoLoggerLocationStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_cleanliness", type="string", nullable=true)
     */
    private $ivoLoggerLocationCleanliness;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_project_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoProjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_batch_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerLocationBatchId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerLocationId;



    /**
     * Set ivoLoggerLocationType
     *
     * @param string $ivoLoggerLocationType
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLoggerLocationType($ivoLoggerLocationType)
    {
        $this->ivoLoggerLocationType = $ivoLoggerLocationType;

        return $this;
    }

    /**
     * Get ivoLoggerLocationType
     *
     * @return string
     */
    public function getIvoLoggerLocationType()
    {
        return $this->ivoLoggerLocationType;
    }

    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoLoggerLocation
     */
    public function setIvoDescription($ivoDescription)
    {
        $this->ivoDescription = $ivoDescription;

        return $this;
    }

    /**
     * Get ivoDescription
     *
     * @return string
     */
    public function getIvoDescription()
    {
        return $this->ivoDescription;
    }

    /**
     * Set ivoWatercoProvidedLocationComments
     *
     * @param string $ivoWatercoProvidedLocationComments
     *
     * @return IvoLoggerLocation
     */
    public function setIvoWatercoProvidedLocationComments($ivoWatercoProvidedLocationComments)
    {
        $this->ivoWatercoProvidedLocationComments = $ivoWatercoProvidedLocationComments;

        return $this;
    }

    /**
     * Get ivoWatercoProvidedLocationComments
     *
     * @return string
     */
    public function getIvoWatercoProvidedLocationComments()
    {
        return $this->ivoWatercoProvidedLocationComments;
    }

    /**
     * Set ivoGpsLatitude
     *
     * @param float $ivoGpsLatitude
     *
     * @return IvoLoggerLocation
     */
    public function setIvoGpsLatitude($ivoGpsLatitude)
    {
        $this->ivoGpsLatitude = $ivoGpsLatitude;

        return $this;
    }

    /**
     * Get ivoGpsLatitude
     *
     * @return float
     */
    public function getIvoGpsLatitude()
    {
        return $this->ivoGpsLatitude;
    }

    /**
     * Set ivoGpsLongitude
     *
     * @param float $ivoGpsLongitude
     *
     * @return IvoLoggerLocation
     */
    public function setIvoGpsLongitude($ivoGpsLongitude)
    {
        $this->ivoGpsLongitude = $ivoGpsLongitude;

        return $this;
    }

    /**
     * Get ivoGpsLongitude
     *
     * @return float
     */
    public function getIvoGpsLongitude()
    {
        return $this->ivoGpsLongitude;
    }

    /**
     * Set ivoGpsAccuracy
     *
     * @param float $ivoGpsAccuracy
     *
     * @return IvoLoggerLocation
     */
    public function setIvoGpsAccuracy($ivoGpsAccuracy)
    {
        $this->ivoGpsAccuracy = $ivoGpsAccuracy;

        return $this;
    }

    /**
     * Get ivoGpsAccuracy
     *
     * @return float
     */
    public function getIvoGpsAccuracy()
    {
        return $this->ivoGpsAccuracy;
    }

    /**
     * Set ivoCommPipeLength
     *
     * @param float $ivoCommPipeLength
     *
     * @return IvoLoggerLocation
     */
    public function setIvoCommPipeLength($ivoCommPipeLength)
    {
        $this->ivoCommPipeLength = $ivoCommPipeLength;

        return $this;
    }

    /**
     * Get ivoCommPipeLength
     *
     * @return float
     */
    public function getIvoCommPipeLength()
    {
        return $this->ivoCommPipeLength;
    }

    /**
     * Set ivoCommPipeDepth
     *
     * @param float $ivoCommPipeDepth
     *
     * @return IvoLoggerLocation
     */
    public function setIvoCommPipeDepth($ivoCommPipeDepth)
    {
        $this->ivoCommPipeDepth = $ivoCommPipeDepth;

        return $this;
    }

    /**
     * Get ivoCommPipeDepth
     *
     * @return float
     */
    public function getIvoCommPipeDepth()
    {
        return $this->ivoCommPipeDepth;
    }

    /**
     * Set ivoCommPipeDiameter
     *
     * @param float $ivoCommPipeDiameter
     *
     * @return IvoLoggerLocation
     */
    public function setIvoCommPipeDiameter($ivoCommPipeDiameter)
    {
        $this->ivoCommPipeDiameter = $ivoCommPipeDiameter;

        return $this;
    }

    /**
     * Get ivoCommPipeDiameter
     *
     * @return float
     */
    public function getIvoCommPipeDiameter()
    {
        return $this->ivoCommPipeDiameter;
    }

    /**
     * Set ivoLocationFloodedAtDeployment
     *
     * @param string $ivoLocationFloodedAtDeployment
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLocationFloodedAtDeployment($ivoLocationFloodedAtDeployment)
    {
        $this->ivoLocationFloodedAtDeployment = $ivoLocationFloodedAtDeployment;

        return $this;
    }

    /**
     * Get ivoLocationFloodedAtDeployment
     *
     * @return string
     */
    public function getIvoLocationFloodedAtDeployment()
    {
        return $this->ivoLocationFloodedAtDeployment;
    }

    /**
     * Set ivoLocationFloodedAtRetrieval
     *
     * @param string $ivoLocationFloodedAtRetrieval
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLocationFloodedAtRetrieval($ivoLocationFloodedAtRetrieval)
    {
        $this->ivoLocationFloodedAtRetrieval = $ivoLocationFloodedAtRetrieval;

        return $this;
    }

    /**
     * Get ivoLocationFloodedAtRetrieval
     *
     * @return string
     */
    public function getIvoLocationFloodedAtRetrieval()
    {
        return $this->ivoLocationFloodedAtRetrieval;
    }

    /**
     * Set ivoPlannedLoggerType
     *
     * @param string $ivoPlannedLoggerType
     *
     * @return IvoLoggerLocation
     */
    public function setIvoPlannedLoggerType($ivoPlannedLoggerType)
    {
        $this->ivoPlannedLoggerType = $ivoPlannedLoggerType;

        return $this;
    }

    /**
     * Get ivoPlannedLoggerType
     *
     * @return string
     */
    public function getIvoPlannedLoggerType()
    {
        return $this->ivoPlannedLoggerType;
    }

    /**
     * Set ivoLoggerLocationStatus
     *
     * @param string $ivoLoggerLocationStatus
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLoggerLocationStatus($ivoLoggerLocationStatus)
    {
        $this->ivoLoggerLocationStatus = $ivoLoggerLocationStatus;

        return $this;
    }

    /**
     * Get ivoLoggerLocationStatus
     *
     * @return string
     */
    public function getIvoLoggerLocationStatus()
    {
        return $this->ivoLoggerLocationStatus;
    }

    /**
     * Set ivoLoggerLocationCleanliness
     *
     * @param string $ivoLoggerLocationCleanliness
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLoggerLocationCleanliness($ivoLoggerLocationCleanliness)
    {
        $this->ivoLoggerLocationCleanliness = $ivoLoggerLocationCleanliness;

        return $this;
    }

    /**
     * Get ivoLoggerLocationCleanliness
     *
     * @return string
     */
    public function getIvoLoggerLocationCleanliness()
    {
        return $this->ivoLoggerLocationCleanliness;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoLoggerLocation
     */
    public function setIvoProjectId($ivoProjectId)
    {
        $this->ivoProjectId = $ivoProjectId;

        return $this;
    }

    /**
     * Get ivoProjectId
     *
     * @return string
     */
    public function getIvoProjectId()
    {
        return $this->ivoProjectId;
    }

    /**
     * Set ivoLoggerLocationBatchId
     *
     * @param string $ivoLoggerLocationBatchId
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLoggerLocationBatchId($ivoLoggerLocationBatchId)
    {
        $this->ivoLoggerLocationBatchId = $ivoLoggerLocationBatchId;

        return $this;
    }

    /**
     * Get ivoLoggerLocationBatchId
     *
     * @return string
     */
    public function getIvoLoggerLocationBatchId()
    {
        return $this->ivoLoggerLocationBatchId;
    }

    /**
     * Set ivoLoggerLocationId
     *
     * @param string $ivoLoggerLocationId
     *
     * @return IvoLoggerLocation
     */
    public function setIvoLoggerLocationId($ivoLoggerLocationId)
    {
        $this->ivoLoggerLocationId = $ivoLoggerLocationId;

        return $this;
    }

    /**
     * Get ivoLoggerLocationId
     *
     * @return string
     */
    public function getIvoLoggerLocationId()
    {
        return $this->ivoLoggerLocationId;
    }
}
