<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoSensorCalibration
 *
 * @ORM\Table(name="ivo_sensor_calibration")
 * @ORM\Entity
 */
class IvoSensorCalibration
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_calibration_date", type="datetime", nullable=true)
     */
    private $ivoCalibrationDate;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_calibration_error_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoCalibrationErrorValue;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_comments", type="string", nullable=true)
     */
    private $ivoComments;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_calibrator_user_id", type="string", length=15, nullable=true)
     */
    private $ivoCalibratorUserId;

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
     * @ORM\Column(name="ivo_calibration_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoCalibrationId;



    /**
     * Set ivoCalibrationDate
     *
     * @param \DateTime $ivoCalibrationDate
     *
     * @return IvoSensorCalibration
     */
    public function setIvoCalibrationDate($ivoCalibrationDate)
    {
        $this->ivoCalibrationDate = $ivoCalibrationDate;

        return $this;
    }

    /**
     * Get ivoCalibrationDate
     *
     * @return \DateTime
     */
    public function getIvoCalibrationDate()
    {
        return $this->ivoCalibrationDate;
    }

    /**
     * Set ivoCalibrationErrorValue
     *
     * @param float $ivoCalibrationErrorValue
     *
     * @return IvoSensorCalibration
     */
    public function setIvoCalibrationErrorValue($ivoCalibrationErrorValue)
    {
        $this->ivoCalibrationErrorValue = $ivoCalibrationErrorValue;

        return $this;
    }

    /**
     * Get ivoCalibrationErrorValue
     *
     * @return float
     */
    public function getIvoCalibrationErrorValue()
    {
        return $this->ivoCalibrationErrorValue;
    }

    /**
     * Set ivoComments
     *
     * @param string $ivoComments
     *
     * @return IvoSensorCalibration
     */
    public function setIvoComments($ivoComments)
    {
        $this->ivoComments = $ivoComments;

        return $this;
    }

    /**
     * Get ivoComments
     *
     * @return string
     */
    public function getIvoComments()
    {
        return $this->ivoComments;
    }

    /**
     * Set ivoCalibratorUserId
     *
     * @param string $ivoCalibratorUserId
     *
     * @return IvoSensorCalibration
     */
    public function setIvoCalibratorUserId($ivoCalibratorUserId)
    {
        $this->ivoCalibratorUserId = $ivoCalibratorUserId;

        return $this;
    }

    /**
     * Get ivoCalibratorUserId
     *
     * @return string
     */
    public function getIvoCalibratorUserId()
    {
        return $this->ivoCalibratorUserId;
    }

    /**
     * Set ivoSensorSerialNumber
     *
     * @param string $ivoSensorSerialNumber
     *
     * @return IvoSensorCalibration
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
     * Set ivoCalibrationId
     *
     * @param integer $ivoCalibrationId
     *
     * @return IvoSensorCalibration
     */
    public function setIvoCalibrationId($ivoCalibrationId)
    {
        $this->ivoCalibrationId = $ivoCalibrationId;

        return $this;
    }

    /**
     * Get ivoCalibrationId
     *
     * @return integer
     */
    public function getIvoCalibrationId()
    {
        return $this->ivoCalibrationId;
    }
}
