<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoWaterco
 *
 * @ORM\Table(name="ivo_waterco")
 * @ORM\Entity
 */
class IvoWaterco
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_waterco_name", type="string", nullable=true)
     */
    private $ivoWatercoName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_waterco_logo", type="blob", nullable=true)
     */
    private $ivoWatercoLogo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ivo_waterco_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_waterco_ivo_waterco_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoWatercoId;



    /**
     * Set ivoWatercoName
     *
     * @param string $ivoWatercoName
     *
     * @return IvoWaterco
     */
    public function setIvoWatercoName($ivoWatercoName)
    {
        $this->ivoWatercoName = $ivoWatercoName;

        return $this;
    }

    /**
     * Get ivoWatercoName
     *
     * @return string
     */
    public function getIvoWatercoName()
    {
        return $this->ivoWatercoName;
    }

    /**
     * Set ivoWatercoLogo
     *
     * @param string $ivoWatercoLogo
     *
     * @return IvoWaterco
     */
    public function setIvoWatercoLogo($ivoWatercoLogo)
    {
        $this->ivoWatercoLogo = $ivoWatercoLogo;

        return $this;
    }

    /**
     * Get ivoWatercoLogo
     *
     * @return string
     */
    public function getIvoWatercoLogo()
    {
        return $this->ivoWatercoLogo;
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
}
