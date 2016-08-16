<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoLlAcResolution
 *
 * @ORM\Table(name="ivo_ll_ac_resolution")
 * @ORM\Entity
 */
class IvoLlAcResolution
{
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
     * @var string
     *
     * @ORM\Column(name="ivo_logger_location_id", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoLoggerLocationId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoAddressCodeId;



    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoLlAcResolution
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
     * @return IvoLlAcResolution
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

    /**
     * Set ivoLoggerLocationId
     *
     * @param string $ivoLoggerLocationId
     *
     * @return IvoLlAcResolution
     */
    public function setIvoLoggerLocationId($ivoLoggerLocationId)
    {
        $this->ivoLoggerLocationId = $ivoLoggerLocationId;

        return $this;
    }

    /**
     * Get ivoLoggerLocationId
     *
     * @return string
     */
    public function getIvoLoggerLocationId()
    {
        return $this->ivoLoggerLocationId;
    }

    /**
     * Set ivoAddressCodeId
     *
     * @param string $ivoAddressCodeId
     *
     * @return IvoLlAcResolution
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
