<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoUserGroup
 *
 * @ORM\Table(name="ivo_user_group")
 * @ORM\Entity
 */
class IvoUserGroup
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
     * @ORM\Column(name="ivo_user_group_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_user_group_ivo_user_group_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoUserGroupId;



    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoUserGroup
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
     * Get ivoUserGroupId
     *
     * @return string
     */
    public function getIvoUserGroupId()
    {
        return $this->ivoUserGroupId;
    }
}
