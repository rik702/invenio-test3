<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerMeasurementData
 *
 * @ORM\Table(name="ivo_logger_measurement_data")
 * @ORM\Entity
 */
class IvoLoggerMeasurementData
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_timestamp", type="datetime", nullable=true)
     */
    private $ivoTimestamp;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_temperature_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoTemperatureValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_logger_upload_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerUploadId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_port_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerPortId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_sequence_number", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoSequenceNumber;



    /**
     * Set ivoTimestamp
     *
     * @param \DateTime $ivoTimestamp
     *
     * @return IvoLoggerMeasurementData
     */
    public function setIvoTimestamp($ivoTimestamp)
    {
        $this->ivoTimestamp = $ivoTimestamp;

        return $this;
    }

    /**
     * Get ivoTimestamp
     *
     * @return \DateTime
     */
    public function getIvoTimestamp()
    {
        return $this->ivoTimestamp;
    }

    /**
     * Set ivoTemperatureValue
     *
     * @param float $ivoTemperatureValue
     *
     * @return IvoLoggerMeasurementData
     */
    public function setIvoTemperatureValue($ivoTemperatureValue)
    {
        $this->ivoTemperatureValue = $ivoTemperatureValue;

        return $this;
    }

    /**
     * Get ivoTemperatureValue
     *
     * @return float
     */
    public function getIvoTemperatureValue()
    {
        return $this->ivoTemperatureValue;
    }

    /**
     * Set ivoLoggerUploadId
     *
     * @param integer $ivoLoggerUploadId
     *
     * @return IvoLoggerMeasurementData
     */
    public function setIvoLoggerUploadId($ivoLoggerUploadId)
    {
        $this->ivoLoggerUploadId = $ivoLoggerUploadId;

        return $this;
    }

    /**
     * Get ivoLoggerUploadId
     *
     * @return integer
     */
    public function getIvoLoggerUploadId()
    {
        return $this->ivoLoggerUploadId;
    }

    /**
     * Set ivoLoggerPortId
     *
     * @param string $ivoLoggerPortId
     *
     * @return IvoLoggerMeasurementData
     */
    public function setIvoLoggerPortId($ivoLoggerPortId)
    {
        $this->ivoLoggerPortId = $ivoLoggerPortId;

        return $this;
    }

    /**
     * Get ivoLoggerPortId
     *
     * @return string
     */
    public function getIvoLoggerPortId()
    {
        return $this->ivoLoggerPortId;
    }

    /**
     * Set ivoSequenceNumber
     *
     * @param integer $ivoSequenceNumber
     *
     * @return IvoLoggerMeasurementData
     */
    public function setIvoSequenceNumber($ivoSequenceNumber)
    {
        $this->ivoSequenceNumber = $ivoSequenceNumber;

        return $this;
    }

    /**
     * Get ivoSequenceNumber
     *
     * @return integer
     */
    public function getIvoSequenceNumber()
    {
        return $this->ivoSequenceNumber;
    }
}
