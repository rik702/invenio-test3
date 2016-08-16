<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoAddressCharacteristics
 *
 * @ORM\Table(name="ivo_address_characteristics")
 * @ORM\Entity
 */
class IvoAddressCharacteristics
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_value_varchar", type="string", nullable=true)
     */
    private $ivoValueVarchar;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_value_blob", type="blob", nullable=true)
     */
    private $ivoValueBlob;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_description", type="string", nullable=true)
     */
    private $ivoDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoAddressCodeId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_key", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ivoKey;



    /**
     * Set ivoValueVarchar
     *
     * @param string $ivoValueVarchar
     *
     * @return IvoAddressCharacteristics
     */
    public function setIvoValueVarchar($ivoValueVarchar)
    {
        $this->ivoValueVarchar = $ivoValueVarchar;

        return $this;
    }

    /**
     * Get ivoValueVarchar
     *
     * @return string
     */
    public function getIvoValueVarchar()
    {
        return $this->ivoValueVarchar;
    }

    /**
     * Set ivoValueBlob
     *
     * @param string $ivoValueBlob
     *
     * @return IvoAddressCharacteristics
     */
    public function setIvoValueBlob($ivoValueBlob)
    {
        $this->ivoValueBlob = $ivoValueBlob;

        return $this;
    }

    /**
     * Get ivoValueBlob
     *
     * @return string
     */
    public function getIvoValueBlob()
    {
        return $this->ivoValueBlob;
    }

    /**
     * Set ivoDescription
     *
     * @param string $ivoDescription
     *
     * @return IvoAddressCharacteristics
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
     * Set ivoAddressCodeId
     *
     * @param string $ivoAddressCodeId
     *
     * @return IvoAddressCharacteristics
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
     * Set ivoKey
     *
     * @param string $ivoKey
     *
     * @return IvoAddressCharacteristics
     */
    public function setIvoKey($ivoKey)
    {
        $this->ivoKey = $ivoKey;

        return $this;
    }

    /**
     * Get ivoKey
     *
     * @return string
     */
    public function getIvoKey()
    {
        return $this->ivoKey;
    }
}
