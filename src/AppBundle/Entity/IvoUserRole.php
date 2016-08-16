<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoUserRole
 *
 * @ORM\Table(name="ivo_user_role")
 * @ORM\Entity
 */
class IvoUserRole
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
     * @ORM\Column(name="ivo_action", type="string", length=15, nullable=true)
     */
    private $ivoAction;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_applicable_project_id", type="string", length=15, nullable=true)
     */
    private $ivoApplicableProjectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_applicable_waterco_id", type="integer", nullable=true)
     */
    private $ivoApplicableWatercoId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_user_role_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_user_role_ivo_user_role_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoUserRoleId;



    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoUserRole
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
     * Set ivoAction
     *
     * @param string $ivoAction
     *
     * @return IvoUserRole
     */
    public function setIvoAction($ivoAction)
    {
        $this->ivoAction = $ivoAction;

        return $this;
    }

    /**
     * Get ivoAction
     *
     * @return string
     */
    public function getIvoAction()
    {
        return $this->ivoAction;
    }

    /**
     * Set ivoApplicableProjectId
     *
     * @param string $ivoApplicableProjectId
     *
     * @return IvoUserRole
     */
    public function setIvoApplicableProjectId($ivoApplicableProjectId)
    {
        $this->ivoApplicableProjectId = $ivoApplicableProjectId;

        return $this;
    }

    /**
     * Get ivoApplicableProjectId
     *
     * @return string
     */
    public function getIvoApplicableProjectId()
    {
        return $this->ivoApplicableProjectId;
    }

    /**
     * Set ivoApplicableWatercoId
     *
     * @param integer $ivoApplicableWatercoId
     *
     * @return IvoUserRole
     */
    public function setIvoApplicableWatercoId($ivoApplicableWatercoId)
    {
        $this->ivoApplicableWatercoId = $ivoApplicableWatercoId;

        return $this;
    }

    /**
     * Get ivoApplicableWatercoId
     *
     * @return integer
     */
    public function getIvoApplicableWatercoId()
    {
        return $this->ivoApplicableWatercoId;
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
