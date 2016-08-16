<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoSensor
 *
 * @ORM\Table(name="ivo_sensor")
 * @ORM\Entity
 */
class IvoSensor
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_sensor_type", type="string", nullable=true)
     */
    private $ivoSensorType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_sensor_status", type="string", nullable=true)
     */
    private $ivoSensorStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_date_acquired", type="datetime", nullable=true)
     */
    private $ivoDateAcquired;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_sensor_serial_number", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_sensor_ivo_sensor_serial_number_seq", allocationSize=1, initialValue=1)
     */
    private $ivoSensorSerialNumber;



    /**
     * Set ivoSensorType
     *
     * @param string $ivoSensorType
     *
     * @return IvoSensor
     */
    public function setIvoSensorType($ivoSensorType)
    {
        $this->ivoSensorType = $ivoSensorType;

        return $this;
    }

    /**
     * Get ivoSensorType
     *
     * @return string
     */
    public function getIvoSensorType()
    {
        return $this->ivoSensorType;
    }

    /**
     * Set ivoSensorStatus
     *
     * @param string $ivoSensorStatus
     *
     * @return IvoSensor
     */
    public function setIvoSensorStatus($ivoSensorStatus)
    {
        $this->ivoSensorStatus = $ivoSensorStatus;

        return $this;
    }

    /**
     * Get ivoSensorStatus
     *
     * @return string
     */
    public function getIvoSensorStatus()
    {
        return $this->ivoSensorStatus;
    }

    /**
     * Set ivoDateAcquired
     *
     * @param \DateTime $ivoDateAcquired
     *
     * @return IvoSensor
     */
    public function setIvoDateAcquired($ivoDateAcquired)
    {
        $this->ivoDateAcquired = $ivoDateAcquired;

        return $this;
    }

    /**
     * Get ivoDateAcquired
     *
     * @return \DateTime
     */
    public function getIvoDateAcquired()
    {
        return $this->ivoDateAcquired;
    }

    /**
     * Get ivoSensorSerialNumber
     *
     * @return string
     */
    public function getIvoSensorSerialNumber()
    {
        return $this->ivoSensorSerialNumber;
    }
}
