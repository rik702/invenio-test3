<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoProject
 *
 * @ORM\Table(name="ivo_project")
 * @ORM\Entity
 */
class IvoProject
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_project_name", type="string", nullable=true)
     */
    private $ivoProjectName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_client_name", type="string", nullable=true)
     */
    private $ivoClientName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_start_date", type="datetime", nullable=true)
     */
    private $ivoStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_completion_date", type="datetime", nullable=true)
     */
    private $ivoCompletionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_leader_user_id", type="string", length=15, nullable=true)
     */
    private $ivoLeaderUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_waterco_id", type="integer", nullable=true)
     */
    private $ivoWatercoId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_project_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_project_ivo_project_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoProjectId;



    /**
     * Set ivoProjectName
     *
     * @param string $ivoProjectName
     *
     * @return IvoProject
     */
    public function setIvoProjectName($ivoProjectName)
    {
        $this->ivoProjectName = $ivoProjectName;

        return $this;
    }

    /**
     * Get ivoProjectName
     *
     * @return string
     */
    public function getIvoProjectName()
    {
        return $this->ivoProjectName;
    }

    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoProject
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
     * Set ivoClientName
     *
     * @param string $ivoClientName
     *
     * @return IvoProject
     */
    public function setIvoClientName($ivoClientName)
    {
        $this->ivoClientName = $ivoClientName;

        return $this;
    }

    /**
     * Get ivoClientName
     *
     * @return string
     */
    public function getIvoClientName()
    {
        return $this->ivoClientName;
    }

    /**
     * Set ivoStartDate
     *
     * @param \DateTime $ivoStartDate
     *
     * @return IvoProject
     */
    public function setIvoStartDate($ivoStartDate)
    {
        $this->ivoStartDate = $ivoStartDate;

        return $this;
    }

    /**
     * Get ivoStartDate
     *
     * @return \DateTime
     */
    public function getIvoStartDate()
    {
        return $this->ivoStartDate;
    }

    /**
     * Set ivoCompletionDate
     *
     * @param \DateTime $ivoCompletionDate
     *
     * @return IvoProject
     */
    public function setIvoCompletionDate($ivoCompletionDate)
    {
        $this->ivoCompletionDate = $ivoCompletionDate;

        return $this;
    }

    /**
     * Get ivoCompletionDate
     *
     * @return \DateTime
     */
    public function getIvoCompletionDate()
    {
        return $this->ivoCompletionDate;
    }

    /**
     * Set ivoLeaderUserId
     *
     * @param string $ivoLeaderUserId
     *
     * @return IvoProject
     */
    public function setIvoLeaderUserId($ivoLeaderUserId)
    {
        $this->ivoLeaderUserId = $ivoLeaderUserId;

        return $this;
    }

    /**
     * Get ivoLeaderUserId
     *
     * @return string
     */
    public function getIvoLeaderUserId()
    {
        return $this->ivoLeaderUserId;
    }

    /**
     * Set ivoWatercoId
     *
     * @param integer $ivoWatercoId
     *
     * @return IvoProject
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
     * Get ivoProjectId
     *
     * @return string
     */
    public function getIvoProjectId()
    {
        return $this->ivoProjectId;
    }
}
