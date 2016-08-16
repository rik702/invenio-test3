<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerPortSensorAttachment
 *
 * @ORM\Table(name="ivo_logger_port_sensor_attachment")
 * @ORM\Entity
 */
class IvoLoggerPortSensorAttachment
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_attached_date", type="datetime", nullable=true)
     */
    private $ivoAttachedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_detached_date", type="datetime", nullable=true)
     */
    private $ivoDetachedDate;

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
     * @var string
     *
     * @ORM\Column(name="ivo_sensor_serial_number", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoSensorSerialNumber;



    /**
     * Set ivoAttachedDate
     *
     * @param \DateTime $ivoAttachedDate
     *
     * @return IvoLoggerPortSensorAttachment
     */
    public function setIvoAttachedDate($ivoAttachedDate)
    {
        $this->ivoAttachedDate = $ivoAttachedDate;

        return $this;
    }

    /**
     * Get ivoAttachedDate
     *
     * @return \DateTime
     */
    public function getIvoAttachedDate()
    {
        return $this->ivoAttachedDate;
    }

    /**
     * Set ivoDetachedDate
     *
     * @param \DateTime $ivoDetachedDate
     *
     * @return IvoLoggerPortSensorAttachment
     */
    public function setIvoDetachedDate($ivoDetachedDate)
    {
        $this->ivoDetachedDate = $ivoDetachedDate;

        return $this;
    }

    /**
     * Get ivoDetachedDate
     *
     * @return \DateTime
     */
    public function getIvoDetachedDate()
    {
        return $this->ivoDetachedDate;
    }

    /**
     * Set ivoLoggerSerialNumber
     *
     * @param string $ivoLoggerSerialNumber
     *
     * @return IvoLoggerPortSensorAttachment
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
     * @return IvoLoggerPortSensorAttachment
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
     * Set ivoSensorSerialNumber
     *
     * @param string $ivoSensorSerialNumber
     *
     * @return IvoLoggerPortSensorAttachment
     */
    public function setIvoSensorSerialNumber($ivoSensorSerialNumber)
    {
        $this->ivoSensorSerialNumber = $ivoSensorSerialNumber;

        return $this;
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
