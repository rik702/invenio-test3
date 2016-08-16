<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoAddress
 *
 * @ORM\Table(name="ivo_address")
 * @ORM\Entity
 */
class IvoAddress
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_water_co_reference", type="string", nullable=true)
     */
    private $ivoWaterCoReference;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_name", type="string", nullable=true)
     */
    private $ivoName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_line_1", type="string", nullable=true)
     */
    private $ivoAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_line_2", type="string", nullable=true)
     */
    private $ivoAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_line_3", type="string", nullable=true)
     */
    private $ivoAddressLine3;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_line_4", type="string", nullable=true)
     */
    private $ivoAddressLine4;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_city", type="string", nullable=true)
     */
    private $ivoCity;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_county_or_region", type="string", nullable=true)
     */
    private $ivoCountyOrRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_country", type="string", nullable=true)
     */
    private $ivoCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_postcode", type="string", nullable=true)
     */
    private $ivoPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_salt", type="string", length=12, nullable=true)
     */
    private $ivoSalt;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoLatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="ivo_longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivoLongitude;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_project_id", type="string", length=15, nullable=true)
     */
    private $ivoProjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_address_ivo_address_code_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoAddressCodeId;



    /**
     * Set ivoWaterCoReference
     *
     * @param string $ivoWaterCoReference
     *
     * @return IvoAddress
     */
    public function setIvoWaterCoReference($ivoWaterCoReference)
    {
        $this->ivoWaterCoReference = $ivoWaterCoReference;

        return $this;
    }

    /**
     * Get ivoWaterCoReference
     *
     * @return string
     */
    public function getIvoWaterCoReference()
    {
        return $this->ivoWaterCoReference;
    }

    /**
     * Set ivoName
     *
     * @param string $ivoName
     *
     * @return IvoAddress
     */
    public function setIvoName($ivoName)
    {
        $this->ivoName = $ivoName;

        return $this;
    }

    /**
     * Get ivoName
     *
     * @return string
     */
    public function getIvoName()
    {
        return $this->ivoName;
    }

    /**
     * Set ivoAddressLine1
     *
     * @param string $ivoAddressLine1
     *
     * @return IvoAddress
     */
    public function setIvoAddressLine1($ivoAddressLine1)
    {
        $this->ivoAddressLine1 = $ivoAddressLine1;

        return $this;
    }

    /**
     * Get ivoAddressLine1
     *
     * @return string
     */
    public function getIvoAddressLine1()
    {
        return $this->ivoAddressLine1;
    }

    /**
     * Set ivoAddressLine2
     *
     * @param string $ivoAddressLine2
     *
     * @return IvoAddress
     */
    public function setIvoAddressLine2($ivoAddressLine2)
    {
        $this->ivoAddressLine2 = $ivoAddressLine2;

        return $this;
    }

    /**
     * Get ivoAddressLine2
     *
     * @return string
     */
    public function getIvoAddressLine2()
    {
        return $this->ivoAddressLine2;
    }

    /**
     * Set ivoAddressLine3
     *
     * @param string $ivoAddressLine3
     *
     * @return IvoAddress
     */
    public function setIvoAddressLine3($ivoAddressLine3)
    {
        $this->ivoAddressLine3 = $ivoAddressLine3;

        return $this;
    }

    /**
     * Get ivoAddressLine3
     *
     * @return string
     */
    public function getIvoAddressLine3()
    {
        return $this->ivoAddressLine3;
    }

    /**
     * Set ivoAddressLine4
     *
     * @param string $ivoAddressLine4
     *
     * @return IvoAddress
     */
    public function setIvoAddressLine4($ivoAddressLine4)
    {
        $this->ivoAddressLine4 = $ivoAddressLine4;

        return $this;
    }

    /**
     * Get ivoAddressLine4
     *
     * @return string
     */
    public function getIvoAddressLine4()
    {
        return $this->ivoAddressLine4;
    }

    /**
     * Set ivoCity
     *
     * @param string $ivoCity
     *
     * @return IvoAddress
     */
    public function setIvoCity($ivoCity)
    {
        $this->ivoCity = $ivoCity;

        return $this;
    }

    /**
     * Get ivoCity
     *
     * @return string
     */
    public function getIvoCity()
    {
        return $this->ivoCity;
    }

    /**
     * Set ivoCountyOrRegion
     *
     * @param string $ivoCountyOrRegion
     *
     * @return IvoAddress
     */
    public function setIvoCountyOrRegion($ivoCountyOrRegion)
    {
        $this->ivoCountyOrRegion = $ivoCountyOrRegion;

        return $this;
    }

    /**
     * Get ivoCountyOrRegion
     *
     * @return string
     */
    public function getIvoCountyOrRegion()
    {
        return $this->ivoCountyOrRegion;
    }

    /**
     * Set ivoCountry
     *
     * @param string $ivoCountry
     *
     * @return IvoAddress
     */
    public function setIvoCountry($ivoCountry)
    {
        $this->ivoCountry = $ivoCountry;

        return $this;
    }

    /**
     * Get ivoCountry
     *
     * @return string
     */
    public function getIvoCountry()
    {
        return $this->ivoCountry;
    }

    /**
     * Set ivoPostcode
     *
     * @param string $ivoPostcode
     *
     * @return IvoAddress
     */
    public function setIvoPostcode($ivoPostcode)
    {
        $this->ivoPostcode = $ivoPostcode;

        return $this;
    }

    /**
     * Get ivoPostcode
     *
     * @return string
     */
    public function getIvoPostcode()
    {
        return $this->ivoPostcode;
    }

    /**
     * Set ivoSalt
     *
     * @param string $ivoSalt
     *
     * @return IvoAddress
     */
    public function setIvoSalt($ivoSalt)
    {
        $this->ivoSalt = $ivoSalt;

        return $this;
    }

    /**
     * Get ivoSalt
     *
     * @return string
     */
    public function getIvoSalt()
    {
        return $this->ivoSalt;
    }

    /**
     * Set ivoLatitude
     *
     * @param float $ivoLatitude
     *
     * @return IvoAddress
     */
    public function setIvoLatitude($ivoLatitude)
    {
        $this->ivoLatitude = $ivoLatitude;

        return $this;
    }

    /**
     * Get ivoLatitude
     *
     * @return float
     */
    public function getIvoLatitude()
    {
        return $this->ivoLatitude;
    }

    /**
     * Set ivoLongitude
     *
     * @param float $ivoLongitude
     *
     * @return IvoAddress
     */
    public function setIvoLongitude($ivoLongitude)
    {
        $this->ivoLongitude = $ivoLongitude;

        return $this;
    }

    /**
     * Get ivoLongitude
     *
     * @return float
     */
    public function getIvoLongitude()
    {
        return $this->ivoLongitude;
    }

    /**
     * Set ivoProjectId
     *
     * @param string $ivoProjectId
     *
     * @return IvoAddress
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
     * Get ivoAddressCodeId
     *
     * @return string
     */
    public function getIvoAddressCodeId()
    {
        return $this->ivoAddressCodeId;
    }
}
