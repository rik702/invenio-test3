<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoContinuousResultData
 *
 * @ORM\Table(name="ivo_continuous_result_data")
 * @ORM\Entity
 */
class IvoContinuousResultData
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_timestamp", type="datetime", nullable=false)
     */
    private $ivoTimestamp;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_flow_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoFlowValue;

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
     * @ORM\Column(name="ivo_result_set_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoResultSetId;

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
     * @return IvoContinuousResultData
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
     * Set ivoFlowValue
     *
     * @param float $ivoFlowValue
     *
     * @return IvoContinuousResultData
     */
    public function setIvoFlowValue($ivoFlowValue)
    {
        $this->ivoFlowValue = $ivoFlowValue;

        return $this;
    }

    /**
     * Get ivoFlowValue
     *
     * @return float
     */
    public function getIvoFlowValue()
    {
        return $this->ivoFlowValue;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoContinuousResultData
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
     * Set ivoResultSetId
     *
     * @param string $ivoResultSetId
     *
     * @return IvoContinuousResultData
     */
    public function setIvoResultSetId($ivoResultSetId)
    {
        $this->ivoResultSetId = $ivoResultSetId;

        return $this;
    }

    /**
     * Get ivoResultSetId
     *
     * @return string
     */
    public function getIvoResultSetId()
    {
        return $this->ivoResultSetId;
    }

    /**
     * Set ivoSequenceNumber
     *
     * @param integer $ivoSequenceNumber
     *
     * @return IvoContinuousResultData
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
