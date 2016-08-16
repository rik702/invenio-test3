<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerSensorPort
 *
 * @ORM\Table(name="ivo_logger_sensor_port")
 * @ORM\Entity
 */
class IvoLoggerSensorPort
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_sensor_port_colour", type="string", nullable=true)
     */
    private $ivoSensorPortColour;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_serial_number", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerSerialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_port_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerPortId;



    /**
     * Set ivoSensorPortColour
     *
     * @param string $ivoSensorPortColour
     *
     * @return IvoLoggerSensorPort
     */
    public function setIvoSensorPortColour($ivoSensorPortColour)
    {
        $this->ivoSensorPortColour = $ivoSensorPortColour;

        return $this;
    }

    /**
     * Get ivoSensorPortColour
     *
     * @return string
     */
    public function getIvoSensorPortColour()
    {
        return $this->ivoSensorPortColour;
    }

    /**
     * Set ivoLoggerSerialNumber
     *
     * @param string $ivoLoggerSerialNumber
     *
     * @return IvoLoggerSensorPort
     */
    public function setIvoLoggerSerialNumber($ivoLoggerSerialNumber)
    {
        $this->ivoLoggerSerialNumber = $ivoLoggerSerialNumber;

        return $this;
    }

    /**
     * Get ivoLoggerSerialNumber
     *
     * @return string
     */
    public function getIvoLoggerSerialNumber()
    {
        return $this->ivoLoggerSerialNumber;
    }

    /**
     * Set ivoLoggerPortId
     *
     * @param string $ivoLoggerPortId
     *
     * @return IvoLoggerSensorPort
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
}
