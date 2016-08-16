<?php

namespace InvenioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IvoAddressCode
 *
 * @ORM\Table(name="ivo_address_code")
 * @ORM\Entity
 */
class IvoAddressCode
{
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_address_code_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ivo_address_code_ivo_address_code_id_seq", allocationSize=1, initialValue=1)
     */
    private $ivoAddressCodeId;



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
