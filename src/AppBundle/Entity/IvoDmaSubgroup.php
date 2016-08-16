<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoDmaSubgroup
 *
 * @ORM\Table(name="ivo_dma_subgroup")
 * @ORM\Entity
 */
class IvoDmaSubgroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma_subgroup_name", type="string", nullable=true)
     */
    private $ivoDmaSubgroupName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_project_id", type="string", length=15, nullable=true)
     */
    private $ivoProjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma_subgroup_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_dma_subgroup_ivo_dma_subgroup_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoDmaSubgroupId;



    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoDmaSubgroup
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
     * Set ivoDmaSubgroupName
     *
     * @param string $ivoDmaSubgroupName
     *
     * @return IvoDmaSubgroup
     */
    public function setIvoDmaSubgroupName($ivoDmaSubgroupName)
    {
        $this->ivoDmaSubgroupName = $ivoDmaSubgroupName;

        return $this;
    }

    /**
     * Get ivoDmaSubgroupName
     *
     * @return string
     */
    public function getIvoDmaSubgroupName()
    {
        return $this->ivoDmaSubgroupName;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoDmaSubgroup
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
     * Get ivoDmaSubgroupId
     *
     * @return string
     */
    public function getIvoDmaSubgroupId()
    {
        return $this->ivoDmaSubgroupId;
    }
}
