<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoPhoto
 *
 * @ORM\Table(name="ivo_photo")
 * @ORM\Entity
 */
class IvoPhoto
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_photo_blob", type="blob", nullable=true)
     */
    private $ivoPhotoBlob;

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
     * @ORM\Column(name="ivo_photo_set_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoPhotoSetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_photo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoPhotoId;



    /**
     * Set ivoPhotoBlob
     *
     * @param string $ivoPhotoBlob
     *
     * @return IvoPhoto
     */
    public function setIvoPhotoBlob($ivoPhotoBlob)
    {
        $this->ivoPhotoBlob = $ivoPhotoBlob;

        return $this;
    }

    /**
     * Get ivoPhotoBlob
     *
     * @return string
     */
    public function getIvoPhotoBlob()
    {
        return $this->ivoPhotoBlob;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoPhoto
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
     * @return IvoPhoto
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
     * @return IvoPhoto
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
     * Set ivoPhotoSetId
     *
     * @param integer $ivoPhotoSetId
     *
     * @return IvoPhoto
     */
    public function setIvoPhotoSetId($ivoPhotoSetId)
    {
        $this->ivoPhotoSetId = $ivoPhotoSetId;

        return $this;
    }

    /**
     * Get ivoPhotoSetId
     *
     * @return integer
     */
    public function getIvoPhotoSetId()
    {
        return $this->ivoPhotoSetId;
    }

    /**
     * Set ivoPhotoId
     *
     * @param integer $ivoPhotoId
     *
     * @return IvoPhoto
     */
    public function setIvoPhotoId($ivoPhotoId)
    {
        $this->ivoPhotoId = $ivoPhotoId;

        return $this;
    }

    /**
     * Get ivoPhotoId
     *
     * @return integer
     */
    public function getIvoPhotoId()
    {
        return $this->ivoPhotoId;
    }
}
