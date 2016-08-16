<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoResultSet
 *
 * @ORM\Table(name="ivo_result_set")
 * @ORM\Entity
 */
class IvoResultSet
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_result_set_type", type="string", length=15, nullable=false)
     */
    private $ivoResultSetType;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma", type="string", nullable=true)
     */
    private $ivoDma;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma_subgroup_id", type="string", length=15, nullable=true)
     */
    private $ivoDmaSubgroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40, nullable=true)
     */
    private $ivoAddressCodeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ivo_results_date", type="datetime", nullable=true)
     */
    private $ivoResultsDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_uploader_user_id", type="string", length=15, nullable=true)
     */
    private $ivoUploaderUserId;

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
     * Set ivoResultSetType
     *
     * @param string $ivoResultSetType
     *
     * @return IvoResultSet
     */
    public function setIvoResultSetType($ivoResultSetType)
    {
        $this->ivoResultSetType = $ivoResultSetType;

        return $this;
    }

    /**
     * Get ivoResultSetType
     *
     * @return string
     */
    public function getIvoResultSetType()
    {
        return $this->ivoResultSetType;
    }

    /**
     * Set ivoDma
     *
     * @param string $ivoDma
     *
     * @return IvoResultSet
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
     * Set ivoDmaSubgroupId
     *
     * @param string $ivoDmaSubgroupId
     *
     * @return IvoResultSet
     */
    public function setIvoDmaSubgroupId($ivoDmaSubgroupId)
    {
        $this->ivoDmaSubgroupId = $ivoDmaSubgroupId;

        return $this;
    }

    /**
     * Get ivoDmaSubgroupId
     *
     * @return string
     */
    public function getIvoDmaSubgroupId()
    {
        return $this->ivoDmaSubgroupId;
    }

    /**
     * Set ivoAddressCodeId
     *
     * @param string $ivoAddressCodeId
     *
     * @return IvoResultSet
     */
    public function setIvoAddressCodeId($ivoAddressCodeId)
    {
        $this->ivoAddressCodeId = $ivoAddressCodeId;

        return $this;
    }

    /**
     * Get ivoAddressCodeId
     *
     * @return string
     */
    public function getIvoAddressCodeId()
    {
        return $this->ivoAddressCodeId;
    }

    /**
     * Set ivoResultsDate
     *
     * @param \DateTime $ivoResultsDate
     *
     * @return IvoResultSet
     */
    public function setIvoResultsDate($ivoResultsDate)
    {
        $this->ivoResultsDate = $ivoResultsDate;

        return $this;
    }

    /**
     * Get ivoResultsDate
     *
     * @return \DateTime
     */
    public function getIvoResultsDate()
    {
        return $this->ivoResultsDate;
    }

    /**
     * Set ivoUploaderUserId
     *
     * @param string $ivoUploaderUserId
     *
     * @return IvoResultSet
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
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoResultSet
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
     * @return IvoResultSet
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
}
