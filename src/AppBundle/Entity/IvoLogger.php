<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLogger
 *
 * @ORM\Table(name="ivo_logger")
 * @ORM\Entity
 */
class IvoLogger
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_date_acquired", type="datetime", nullable=true)
     */
    private $ivoDateAcquired;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_status", type="string", nullable=true)
     */
    private $ivoLoggerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_type", type="string", nullable=true)
     */
    private $ivoLoggerType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_serial_number", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_logger_ivo_logger_serial_number_seq", allocationSize=1, initialValue=1)
     */
    private $ivoLoggerSerialNumber;



    /**
     * Set ivoDateAcquired
     *
     * @param \DateTime $ivoDateAcquired
     *
     * @return IvoLogger
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
     * Set ivoLoggerStatus
     *
     * @param string $ivoLoggerStatus
     *
     * @return IvoLogger
     */
    public function setIvoLoggerStatus($ivoLoggerStatus)
    {
        $this->ivoLoggerStatus = $ivoLoggerStatus;

        return $this;
    }

    /**
     * Get ivoLoggerStatus
     *
     * @return string
     */
    public function getIvoLoggerStatus()
    {
        return $this->ivoLoggerStatus;
    }

    /**
     * Set ivoLoggerType
     *
     * @param string $ivoLoggerType
     *
     * @return IvoLogger
     */
    public function setIvoLoggerType($ivoLoggerType)
    {
        $this->ivoLoggerType = $ivoLoggerType;

        return $this;
    }

    /**
     * Get ivoLoggerType
     *
     * @return string
     */
    public function getIvoLoggerType()
    {
        return $this->ivoLoggerType;
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
}
