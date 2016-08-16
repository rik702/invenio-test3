<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerTest
 *
 * @ORM\Table(name="ivo_logger_test")
 * @ORM\Entity
 */
class IvoLoggerTest
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_test_date", type="datetime", nullable=true)
     */
    private $ivoTestDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_test_result", type="string", nullable=true)
     */
    private $ivoTestResult;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_tester_user_id", type="string", length=15, nullable=true)
     */
    private $ivoTesterUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_serial_number", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerSerialNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_test_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoTestId;



    /**
     * Set ivoTestDate
     *
     * @param \DateTime $ivoTestDate
     *
     * @return IvoLoggerTest
     */
    public function setIvoTestDate($ivoTestDate)
    {
        $this->ivoTestDate = $ivoTestDate;

        return $this;
    }

    /**
     * Get ivoTestDate
     *
     * @return \DateTime
     */
    public function getIvoTestDate()
    {
        return $this->ivoTestDate;
    }

    /**
     * Set ivoTestResult
     *
     * @param string $ivoTestResult
     *
     * @return IvoLoggerTest
     */
    public function setIvoTestResult($ivoTestResult)
    {
        $this->ivoTestResult = $ivoTestResult;

        return $this;
    }

    /**
     * Get ivoTestResult
     *
     * @return string
     */
    public function getIvoTestResult()
    {
        return $this->ivoTestResult;
    }

    /**
     * Set ivoTesterUserId
     *
     * @param string $ivoTesterUserId
     *
     * @return IvoLoggerTest
     */
    public function setIvoTesterUserId($ivoTesterUserId)
    {
        $this->ivoTesterUserId = $ivoTesterUserId;

        return $this;
    }

    /**
     * Get ivoTesterUserId
     *
     * @return string
     */
    public function getIvoTesterUserId()
    {
        return $this->ivoTesterUserId;
    }

    /**
     * Set ivoLoggerSerialNumber
     *
     * @param string $ivoLoggerSerialNumber
     *
     * @return IvoLoggerTest
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
     * Set ivoTestId
     *
     * @param integer $ivoTestId
     *
     * @return IvoLoggerTest
     */
    public function setIvoTestId($ivoTestId)
    {
        $this->ivoTestId = $ivoTestId;

        return $this;
    }

    /**
     * Get ivoTestId
     *
     * @return integer
     */
    public function getIvoTestId()
    {
        return $this->ivoTestId;
    }
}
