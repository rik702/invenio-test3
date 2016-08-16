<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerLocationSensorPoint
 *
 * @ORM\Table(name="ivo_logger_location_sensor_point")
 * @ORM\Entity
 */
class IvoLoggerLocationSensorPoint
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_location", type="string", nullable=true)
     */
    private $ivoLocation;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_depth", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoDepth;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_attached_to_material", type="string", nullable=true)
     */
    private $ivoAttachedToMaterial;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_clip_size", type="string", nullable=true)
     */
    private $ivoClipSize;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_insulation_type", type="string", nullable=true)
     */
    private $ivoInsulationType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_meter_present", type="string", nullable=true)
     */
    private $ivoMeterPresent;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_meter_reading_at_connection", type="string", nullable=true)
     */
    private $ivoMeterReadingAtConnection;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_meter_reading_at_disconnection", type="string", nullable=true)
     */
    private $ivoMeterReadingAtDisconnection;

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
     * @var integer
     *
     * @ORM\Column(name="ivo_logger_location_sensor_point_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerLocationSensorPointId;



    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoLoggerLocationSensorPoint
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
     * Set ivoLocation
     *
     * @param string $ivoLocation
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoLocation($ivoLocation)
    {
        $this->ivoLocation = $ivoLocation;

        return $this;
    }

    /**
     * Get ivoLocation
     *
     * @return string
     */
    public function getIvoLocation()
    {
        return $this->ivoLocation;
    }

    /**
     * Set ivoDepth
     *
     * @param float $ivoDepth
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoDepth($ivoDepth)
    {
        $this->ivoDepth = $ivoDepth;

        return $this;
    }

    /**
     * Get ivoDepth
     *
     * @return float
     */
    public function getIvoDepth()
    {
        return $this->ivoDepth;
    }

    /**
     * Set ivoAttachedToMaterial
     *
     * @param string $ivoAttachedToMaterial
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoAttachedToMaterial($ivoAttachedToMaterial)
    {
        $this->ivoAttachedToMaterial = $ivoAttachedToMaterial;

        return $this;
    }

    /**
     * Get ivoAttachedToMaterial
     *
     * @return string
     */
    public function getIvoAttachedToMaterial()
    {
        return $this->ivoAttachedToMaterial;
    }

    /**
     * Set ivoClipSize
     *
     * @param string $ivoClipSize
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoClipSize($ivoClipSize)
    {
        $this->ivoClipSize = $ivoClipSize;

        return $this;
    }

    /**
     * Get ivoClipSize
     *
     * @return string
     */
    public function getIvoClipSize()
    {
        return $this->ivoClipSize;
    }

    /**
     * Set ivoInsulationType
     *
     * @param string $ivoInsulationType
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoInsulationType($ivoInsulationType)
    {
        $this->ivoInsulationType = $ivoInsulationType;

        return $this;
    }

    /**
     * Get ivoInsulationType
     *
     * @return string
     */
    public function getIvoInsulationType()
    {
        return $this->ivoInsulationType;
    }

    /**
     * Set ivoMeterPresent
     *
     * @param string $ivoMeterPresent
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoMeterPresent($ivoMeterPresent)
    {
        $this->ivoMeterPresent = $ivoMeterPresent;

        return $this;
    }

    /**
     * Get ivoMeterPresent
     *
     * @return string
     */
    public function getIvoMeterPresent()
    {
        return $this->ivoMeterPresent;
    }

    /**
     * Set ivoMeterReadingAtConnection
     *
     * @param string $ivoMeterReadingAtConnection
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoMeterReadingAtConnection($ivoMeterReadingAtConnection)
    {
        $this->ivoMeterReadingAtConnection = $ivoMeterReadingAtConnection;

        return $this;
    }

    /**
     * Get ivoMeterReadingAtConnection
     *
     * @return string
     */
    public function getIvoMeterReadingAtConnection()
    {
        return $this->ivoMeterReadingAtConnection;
    }

    /**
     * Set ivoMeterReadingAtDisconnection
     *
     * @param string $ivoMeterReadingAtDisconnection
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoMeterReadingAtDisconnection($ivoMeterReadingAtDisconnection)
    {
        $this->ivoMeterReadingAtDisconnection = $ivoMeterReadingAtDisconnection;

        return $this;
    }

    /**
     * Get ivoMeterReadingAtDisconnection
     *
     * @return string
     */
    public function getIvoMeterReadingAtDisconnection()
    {
        return $this->ivoMeterReadingAtDisconnection;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoLoggerLocationSensorPoint
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
     * @return IvoLoggerLocationSensorPoint
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
     * @return IvoLoggerLocationSensorPoint
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

    /**
     * Set ivoLoggerLocationSensorPointId
     *
     * @param integer $ivoLoggerLocationSensorPointId
     *
     * @return IvoLoggerLocationSensorPoint
     */
    public function setIvoLoggerLocationSensorPointId($ivoLoggerLocationSensorPointId)
    {
        $this->ivoLoggerLocationSensorPointId = $ivoLoggerLocationSensorPointId;

        return $this;
    }

    /**
     * Get ivoLoggerLocationSensorPointId
     *
     * @return integer
     */
    public function getIvoLoggerLocationSensorPointId()
    {
        return $this->ivoLoggerLocationSensorPointId;
    }
}
