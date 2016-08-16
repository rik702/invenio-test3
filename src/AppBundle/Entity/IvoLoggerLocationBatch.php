<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLoggerLocationBatch
 *
 * @ORM\Table(name="ivo_logger_location_batch")
 * @ORM\Entity
 */
class IvoLoggerLocationBatch
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_logger_batch_name", type="string", nullable=true)
     */
    private $ivoLoggerBatchName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_start_installation_date", type="datetime", nullable=true)
     */
    private $ivoStartInstallationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_completed_installation_date", type="datetime", nullable=true)
     */
    private $ivoCompletedInstallationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_survey_date", type="datetime", nullable=true)
     */
    private $ivoSurveyDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_start_deinstallation_date", type="datetime", nullable=true)
     */
    private $ivoStartDeinstallationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_completed_deinstallation_date", type="datetime", nullable=true)
     */
    private $ivoCompletedDeinstallationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma", type="string", nullable=true)
     */
    private $ivoDma;

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
     * Set ivoLoggerBatchName
     *
     * @param string $ivoLoggerBatchName
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoLoggerBatchName($ivoLoggerBatchName)
    {
        $this->ivoLoggerBatchName = $ivoLoggerBatchName;

        return $this;
    }

    /**
     * Get ivoLoggerBatchName
     *
     * @return string
     */
    public function getIvoLoggerBatchName()
    {
        return $this->ivoLoggerBatchName;
    }

    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoLoggerLocationBatch
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
     * Set ivoStartInstallationDate
     *
     * @param \DateTime $ivoStartInstallationDate
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoStartInstallationDate($ivoStartInstallationDate)
    {
        $this->ivoStartInstallationDate = $ivoStartInstallationDate;

        return $this;
    }

    /**
     * Get ivoStartInstallationDate
     *
     * @return \DateTime
     */
    public function getIvoStartInstallationDate()
    {
        return $this->ivoStartInstallationDate;
    }

    /**
     * Set ivoCompletedInstallationDate
     *
     * @param \DateTime $ivoCompletedInstallationDate
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoCompletedInstallationDate($ivoCompletedInstallationDate)
    {
        $this->ivoCompletedInstallationDate = $ivoCompletedInstallationDate;

        return $this;
    }

    /**
     * Get ivoCompletedInstallationDate
     *
     * @return \DateTime
     */
    public function getIvoCompletedInstallationDate()
    {
        return $this->ivoCompletedInstallationDate;
    }

    /**
     * Set ivoSurveyDate
     *
     * @param \DateTime $ivoSurveyDate
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoSurveyDate($ivoSurveyDate)
    {
        $this->ivoSurveyDate = $ivoSurveyDate;

        return $this;
    }

    /**
     * Get ivoSurveyDate
     *
     * @return \DateTime
     */
    public function getIvoSurveyDate()
    {
        return $this->ivoSurveyDate;
    }

    /**
     * Set ivoStartDeinstallationDate
     *
     * @param \DateTime $ivoStartDeinstallationDate
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoStartDeinstallationDate($ivoStartDeinstallationDate)
    {
        $this->ivoStartDeinstallationDate = $ivoStartDeinstallationDate;

        return $this;
    }

    /**
     * Get ivoStartDeinstallationDate
     *
     * @return \DateTime
     */
    public function getIvoStartDeinstallationDate()
    {
        return $this->ivoStartDeinstallationDate;
    }

    /**
     * Set ivoCompletedDeinstallationDate
     *
     * @param \DateTime $ivoCompletedDeinstallationDate
     *
     * @return IvoLoggerLocationBatch
     */
    public function setIvoCompletedDeinstallationDate($ivoCompletedDeinstallationDate)
    {
        $this->ivoCompletedDeinstallationDate = $ivoCompletedDeinstallationDate;

        return $this;
    }

    /**
     * Get ivoCompletedDeinstallationDate
     *
     * @return \DateTime
     */
    public function getIvoCompletedDeinstallationDate()
    {
        return $this->ivoCompletedDeinstallationDate;
    }

    /**
     * Set ivoDma
     *
     * @param string $ivoDma
     *
     * @return IvoLoggerLocationBatch
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
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoLoggerLocationBatch
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
     * @return IvoLoggerLocationBatch
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
}
