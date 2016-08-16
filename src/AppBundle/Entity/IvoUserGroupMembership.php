<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoUserGroupMembership
 *
 * @ORM\Table(name="ivo_user_group_membership")
 * @ORM\Entity
 */
class IvoUserGroupMembership
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
     * @ORM\Column(name="ivo_user_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoUserId;



    /**
     * Set ivoUserGroupId
     *
     * @param string $ivoUserGroupId
     *
     * @return IvoUserGroupMembership
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
     * Set ivoUserId
     *
     * @param string $ivoUserId
     *
     * @return IvoUserGroupMembership
     */
    public function setIvoUserId($ivoUserId)
    {
        $this->ivoUserId = $ivoUserId;

        return $this;
    }

    /**
     * Get ivoUserId
     *
     * @return string
     */
    public function getIvoUserId()
    {
        return $this->ivoUserId;
    }
}
