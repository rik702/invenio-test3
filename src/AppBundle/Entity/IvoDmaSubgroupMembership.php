<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoDmaSubgroupMembership
 *
 * @ORM\Table(name="ivo_dma_subgroup_membership")
 * @ORM\Entity
 */
class IvoDmaSubgroupMembership
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_dma_subgroup_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoDmaSubgroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoAddressCodeId;



    /**
     * Set ivoDmaSubgroupId
     *
     * @param string $ivoDmaSubgroupId
     *
     * @return IvoDmaSubgroupMembership
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
     * @return IvoDmaSubgroupMembership
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
}
