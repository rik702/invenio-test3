<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoSensorPointLogger
 *
 * @ORM\Table(name="ivo_sensor_point_logger")
 * @ORM\Entity
 */
class IvoSensorPointLogger
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_connection_date", type="datetime", nullable=true)
     */
    private $ivoConnectionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_disconnection_date", type="datetime", nullable=true)
     */
    private $ivoDisconnectionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_connection_comments", type="string", nullable=true)
     */
    private $ivoConnectionComments;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_disconnection_comments", type="string", nullable=true)
     */
    private $ivoDisconnectionComments;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_connection_user_id", type="string", length=15, nullable=true)
     */
    private $ivoConnectionUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_disconnection_user_id", type="string", length=15, nullable=true)
     */
    private $ivoDisconnectionUserId;

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
     * @var integer
     *
     * @ORM\Column(name="ivo_sequence_number", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoSequenceNumber;



    /**
     * Set ivoConnectionDate
     *
     * @param \DateTime $ivoConnectionDate
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoConnectionDate($ivoConnectionDate)
    {
        $this->ivoConnectionDate = $ivoConnectionDate;

        return $this;
    }

    /**
     * Get ivoConnectionDate
     *
     * @return \DateTime
     */
    public function getIvoConnectionDate()
    {
        return $this->ivoConnectionDate;
    }

    /**
     * Set ivoDisconnectionDate
     *
     * @param \DateTime $ivoDisconnectionDate
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoDisconnectionDate($ivoDisconnectionDate)
    {
        $this->ivoDisconnectionDate = $ivoDisconnectionDate;

        return $this;
    }

    /**
     * Get ivoDisconnectionDate
     *
     * @return \DateTime
     */
    public function getIvoDisconnectionDate()
    {
        return $this->ivoDisconnectionDate;
    }

    /**
     * Set ivoConnectionComments
     *
     * @param string $ivoConnectionComments
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoConnectionComments($ivoConnectionComments)
    {
        $this->ivoConnectionComments = $ivoConnectionComments;

        return $this;
    }

    /**
     * Get ivoConnectionComments
     *
     * @return string
     */
    public function getIvoConnectionComments()
    {
        return $this->ivoConnectionComments;
    }

    /**
     * Set ivoDisconnectionComments
     *
     * @param string $ivoDisconnectionComments
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoDisconnectionComments($ivoDisconnectionComments)
    {
        $this->ivoDisconnectionComments = $ivoDisconnectionComments;

        return $this;
    }

    /**
     * Get ivoDisconnectionComments
     *
     * @return string
     */
    public function getIvoDisconnectionComments()
    {
        return $this->ivoDisconnectionComments;
    }

    /**
     * Set ivoConnectionUserId
     *
     * @param string $ivoConnectionUserId
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoConnectionUserId($ivoConnectionUserId)
    {
        $this->ivoConnectionUserId = $ivoConnectionUserId;

        return $this;
    }

    /**
     * Get ivoConnectionUserId
     *
     * @return string
     */
    public function getIvoConnectionUserId()
    {
        return $this->ivoConnectionUserId;
    }

    /**
     * Set ivoDisconnectionUserId
     *
     * @param string $ivoDisconnectionUserId
     *
     * @return IvoSensorPointLogger
     */
    public function setIvoDisconnectionUserId($ivoDisconnectionUserId)
    {
        $this->ivoDisconnectionUserId = $ivoDisconnectionUserId;

        return $this;
    }

    /**
     * Get ivoDisconnectionUserId
     *
     * @return string
     */
    public function getIvoDisconnectionUserId()
    {
        return $this->ivoDisconnectionUserId;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoSensorPointLogger
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
     * @return IvoSensorPointLogger
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
     * @return IvoSensorPointLogger
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
     * @return IvoSensorPointLogger
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

    /**
     * Set ivoLoggerSerialNumber
     *
     * @param string $ivoLoggerSerialNumber
     *
     * @return IvoSensorPointLogger
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
     * @return IvoSensorPointLogger
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
     * @return IvoSensorPointLogger
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

    /**
     * Set ivoSequenceNumber
     *
     * @param integer $ivoSequenceNumber
     *
     * @return IvoSensorPointLogger
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
