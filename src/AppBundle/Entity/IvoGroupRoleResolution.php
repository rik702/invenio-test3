<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoGroupRoleResolution
 *
 * @ORM\Table(name="ivo_group_role_resolution")
 * @ORM\Entity
 */
class IvoGroupRoleResolution
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_user_group_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoUserGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_user_role_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoUserRoleId;



    /**
     * Set ivoUserGroupId
     *
     * @param string $ivoUserGroupId
     *
     * @return IvoGroupRoleResolution
     */
    public function setIvoUserGroupId($ivoUserGroupId)
    {
        $this->ivoUserGroupId = $ivoUserGroupId;

        return $this;
    }

    /**
     * Get ivoUserGroupId
     *
     * @return string
     */
    public function getIvoUserGroupId()
    {
        return $this->ivoUserGroupId;
    }

    /**
     * Set ivoUserRoleId
     *
     * @param string $ivoUserRoleId
     *
     * @return IvoGroupRoleResolution
     */
    public function setIvoUserRoleId($ivoUserRoleId)
    {
        $this->ivoUserRoleId = $ivoUserRoleId;

        return $this;
    }

    /**
     * Get ivoUserRoleId
     *
     * @return string
     */
    public function getIvoUserRoleId()
    {
        return $this->ivoUserRoleId;
    }
}
