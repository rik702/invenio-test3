<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * IvoUser
 * @UniqueEntity(fields={"ivoUserId"}, message="It looks like this User ID already exists!")
 * @ORM\Table(name="ivo_user")
 * @ORM\Entity
 */
class IvoUser implements UserInterface
{
    /**
     * A non-persisted field that's used to create the encoded password.
     *
     * @Assert\NotBlank(groups={"Registration"})
     * @var string
     */
    private $plainPassword;
    /**
     * @var string
     *
     * @ORM\Column(name="ivo_first_name", type="string", nullable=true)
     */
    private $ivoFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_surname", type="string", nullable=true)
     */
    private $ivoSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_organisation", type="string", nullable=true)
     */
    private $ivoOrganisation;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_email_address", type="string", nullable=true)
     */
    private $ivoEmailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_phone_number", type="string", nullable=true)
     */
    private $ivoPhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_salt", type="string", length=12, nullable=true)
     */
    private $ivoSalt;

    /**
     * @var string
     *
     * @ORM\Column(name="ivo_password", type="string", length=40, nullable=true)
     */
    private $ivoPassword;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 15,
     *      minMessage = "Your user ID must be at least {{ limit }} characters long",
     *      maxMessage = "Your user ID cannot be longer than {{ limit }} characters"
     * )
     * @ORM\Column(name="ivo_user_id", type="string", length=15)
     * @ORM\Id
     */
    private $ivoUserId;



    /**
     * Set ivoFirstName
     *
     * @param string $ivoFirstName
     *
     * @return IvoUser
     */
    public function setIvoFirstName($ivoFirstName)
    {
        $this->ivoFirstName = $ivoFirstName;

        return $this;
    }

    /**
     * Get ivoFirstName
     *
     * @return string
     */
    public function getIvoFirstName()
    {
        return $this->ivoFirstName;
    }

    /**
     * Set ivoSurname
     *
     * @param string $ivoSurname
     *
     * @return IvoUser
     */
    public function setIvoSurname($ivoSurname)
    {
        $this->ivoSurname = $ivoSurname;

        return $this;
    }

    /**
     * Get ivoSurname
     *
     * @return string
     */
    public function getIvoSurname()
    {
        return $this->ivoSurname;
    }

    /**
     * Set ivoOrganisation
     *
     * @param string $ivoOrganisation
     *
     * @return IvoUser
     */
    public function setIvoOrganisation($ivoOrganisation)
    {
        $this->ivoOrganisation = $ivoOrganisation;

        return $this;
    }

    /**
     * Get ivoOrganisation
     *
     * @return string
     */
    public function getIvoOrganisation()
    {
        return $this->ivoOrganisation;
    }

    /**
     * Set ivoEmailAddress
     *
     * @param string $ivoEmailAddress
     *
     * @return IvoUser
     */
    public function setIvoEmailAddress($ivoEmailAddress)
    {
        $this->ivoEmailAddress = $ivoEmailAddress;

        return $this;
    }

    /**
     * Get ivoEmailAddress
     *
     * @return string
     */
    public function getIvoEmailAddress()
    {
        return $this->ivoEmailAddress;
    }

    /**
     * Set ivoPhoneNumber
     *
     * @param string $ivoPhoneNumber
     *
     * @return IvoUser
     */
    public function setIvoPhoneNumber($ivoPhoneNumber)
    {
        $this->ivoPhoneNumber = $ivoPhoneNumber;

        return $this;
    }

    /**
     * Get ivoPhoneNumber
     *
     * @return string
     */
    public function getIvoPhoneNumber()
    {
        return $this->ivoPhoneNumber;
    }

    /**
     * Set ivoSalt
     *
     * @param string $ivoSalt
     *
     * @return IvoUser
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
     * Set ivoPassword
     *
     * @param string $ivoPassword
     *
     * @return IvoUser
     */
    public function setIvoPassword($ivoPassword)
    {
        $this->ivoPassword = $ivoPassword;

        return $this;
    }

    /**
     * Get ivoPassword
     *
     * @return string
     */
    public function getIvoPassword()
    {
        return $this->ivoPassword;
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

    /**
     * @param string $ivoUserId
     */
    public function setIvoUserId($ivoUserId)
    {
        $this->ivoUserId = $ivoUserId;
    }



    public function getRoles()
    {
        return ['ROLE_USER','ROLE_ADMIN'];
    }

    public function getPassword()
    {
        return $this->ivoPassword;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->ivoUserId;
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        // forces the object to look "dirty" to Doctrine. Avoids
        // Doctrine *not* saving this entity, if only plainPassword changes
        $this->ivoPassword = null;
    }


}
