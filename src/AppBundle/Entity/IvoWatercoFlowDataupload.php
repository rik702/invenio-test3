<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoWatercoFlowDataupload
 *
 * @ORM\Table(name="ivo_waterco_flow_dataupload")
 * @ORM\Entity
 */
class IvoWatercoFlowDataupload
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_upload_date", type="datetime", nullable=true)
     */
    private $ivoUploadDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_upload_type", type="string", length=15, nullable=true)
     */
    private $ivoUploadType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_compressed_csv_file", type="blob", nullable=true)
     */
    private $ivoCompressedCsvFile;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_uploader_user_id", type="string", length=15, nullable=true)
     */
    private $ivoUploaderUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_addresscode_id", type="string", length=40, nullable=true)
     */
    private $ivoAddresscodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma", type="string", nullable=true)
     */
    private $ivoDma;

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
     * Set ivoUploadDate
     *
     * @param \DateTime $ivoUploadDate
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoUploadDate($ivoUploadDate)
    {
        $this->ivoUploadDate = $ivoUploadDate;

        return $this;
    }

    /**
     * Get ivoUploadDate
     *
     * @return \DateTime
     */
    public function getIvoUploadDate()
    {
        return $this->ivoUploadDate;
    }

    /**
     * Set ivoUploadType
     *
     * @param string $ivoUploadType
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoUploadType($ivoUploadType)
    {
        $this->ivoUploadType = $ivoUploadType;

        return $this;
    }

    /**
     * Get ivoUploadType
     *
     * @return string
     */
    public function getIvoUploadType()
    {
        return $this->ivoUploadType;
    }

    /**
     * Set ivoCompressedCsvFile
     *
     * @param string $ivoCompressedCsvFile
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoCompressedCsvFile($ivoCompressedCsvFile)
    {
        $this->ivoCompressedCsvFile = $ivoCompressedCsvFile;

        return $this;
    }

    /**
     * Get ivoCompressedCsvFile
     *
     * @return string
     */
    public function getIvoCompressedCsvFile()
    {
        return $this->ivoCompressedCsvFile;
    }

    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoDescription($ivoDescription)
    {
        $this->ivoDescription = $ivoDescription;

        return $this;
    }

    /**
     * Get ivoDescription
     *
     * @return string
     */
    public function getIvoDescription()
    {
        return $this->ivoDescription;
    }

    /**
     * Set ivoUploaderUserId
     *
     * @param string $ivoUploaderUserId
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoUploaderUserId($ivoUploaderUserId)
    {
        $this->ivoUploaderUserId = $ivoUploaderUserId;

        return $this;
    }

    /**
     * Get ivoUploaderUserId
     *
     * @return string
     */
    public function getIvoUploaderUserId()
    {
        return $this->ivoUploaderUserId;
    }

    /**
     * Set ivoAddresscodeId
     *
     * @param string $ivoAddresscodeId
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoAddresscodeId($ivoAddresscodeId)
    {
        $this->ivoAddresscodeId = $ivoAddresscodeId;

        return $this;
    }

    /**
     * Get ivoAddresscodeId
     *
     * @return string
     */
    public function getIvoAddresscodeId()
    {
        return $this->ivoAddresscodeId;
    }

    /**
     * Set ivoDma
     *
     * @param string $ivoDma
     *
     * @return IvoWatercoFlowDataupload
     */
    public function setIvoDma($ivoDma)
    {
        $this->ivoDma = $ivoDma;

        return $this;
    }

    /**
     * Get ivoDma
     *
     * @return string
     */
    public function getIvoDma()
    {
        return $this->ivoDma;
    }

    /**
     * Set ivoWatercoId
     *
     * @param integer $ivoWatercoId
     *
     * @return IvoWatercoFlowDataupload
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
     * @return IvoWatercoFlowDataupload
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
}
