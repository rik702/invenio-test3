<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoPhotoSet
 *
 * @ORM\Table(name="ivo_photo_set")
 * @ORM\Entity
 */
class IvoPhotoSet
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_photo_set_type", type="string", nullable=true)
     */
    private $ivoPhotoSetType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_comments", type="string", nullable=true)
     */
    private $ivoComments;

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
     * Set ivoPhotoSetType
     *
     * @param string $ivoPhotoSetType
     *
     * @return IvoPhotoSet
     */
    public function setIvoPhotoSetType($ivoPhotoSetType)
    {
        $this->ivoPhotoSetType = $ivoPhotoSetType;

        return $this;
    }

    /**
     * Get ivoPhotoSetType
     *
     * @return string
     */
    public function getIvoPhotoSetType()
    {
        return $this->ivoPhotoSetType;
    }

    /**
     * Set ivoComments
     *
     * @param string $ivoComments
     *
     * @return IvoPhotoSet
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
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoPhotoSet
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
     * @return IvoPhotoSet
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
     * @return IvoPhotoSet
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
     * @return IvoPhotoSet
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
}
