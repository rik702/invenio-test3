<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoWatercoFlowData
 *
 * @ORM\Table(name="ivo_waterco_flow_data")
 * @ORM\Entity
 */
class IvoWatercoFlowData
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
     * @ORM\Column(name="ivo_flow_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoFlowValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_waterco_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoWatercoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_waterco_flow_dataupload_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoWatercoFlowDatauploadId;

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
     * @return IvoWatercoFlowData
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
     * @return IvoWatercoFlowData
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
     * Set ivoWatercoId
     *
     * @param integer $ivoWatercoId
     *
     * @return IvoWatercoFlowData
     */
    public function setIvoWatercoId($ivoWatercoId)
    {
        $this->ivoWatercoId = $ivoWatercoId;

        return $this;
    }

    /**
     * Get ivoWatercoId
     *
     * @return integer
     */
    public function getIvoWatercoId()
    {
        return $this->ivoWatercoId;
    }

    /**
     * Set ivoWatercoFlowDatauploadId
     *
     * @param integer $ivoWatercoFlowDatauploadId
     *
     * @return IvoWatercoFlowData
     */
    public function setIvoWatercoFlowDatauploadId($ivoWatercoFlowDatauploadId)
    {
        $this->ivoWatercoFlowDatauploadId = $ivoWatercoFlowDatauploadId;

        return $this;
    }

    /**
     * Get ivoWatercoFlowDatauploadId
     *
     * @return integer
     */
    public function getIvoWatercoFlowDatauploadId()
    {
        return $this->ivoWatercoFlowDatauploadId;
    }

    /**
     * Set ivoSequenceNumber
     *
     * @param integer $ivoSequenceNumber
     *
     * @return IvoWatercoFlowData
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
