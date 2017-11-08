<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01/11/2017
 * Time: 16:46
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int $_iIdUser
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_iIdUser;

    /**
     * @var string $_sFirstNameUser
     * @Assert\NotBlank()
     * @ORM\Column(name="first_name_user", type="string", length=255, nullable=true)
     */
    protected $_sFirstNameUser;

    /**
     * @var string $_sAddressUser
     * @Assert\NotBlank()
     * @ORM\Column(name="address_user", type="string", length=255, nullable=true)
     */
    protected $_sAddressUser;

    /**
     * @var int $_iPostalCodeUser
     * @Assert\NotBlank()
     * @ORM\Column(name="postal_code_user", type="integer", length=5, nullable=true)
     */
    protected $_iPostalCodeUser;

    /**
     * @var string $_sTelUser
     * @Assert\NotBlank()
     * @ORM\Column(name="tel_user", type="string", length=255, nullable=true)
     */
    protected $_sTelUser;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Get _iIdUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->_iIdUser;
    }

    /**
     * Set sFirstNameUser
     *
     * @param string $sFirstNameUser
     *
     * @return User
     */
    public function setFirstNameUser($sFirstNameUser)
    {
        $this->_sFirstNameUser = $sFirstNameUser;

        return $this;
    }

    /**
     * Get sFirstNameUser
     *
     * @return string
     */
    public function getFirstNameUser()
    {
        return $this->_sFirstNameUser;
    }

    /**
     * Set sAddressUser
     *
     * @param string $sAddressUser
     *
     * @return User
     */
    public function setAddressUser($sAddressUser)
    {
        $this->_sAddressUser = $sAddressUser;

        return $this;
    }

    /**
     * Get sAddressUser
     *
     * @return string
     */
    public function getAddressUser()
    {
        return $this->_sAddressUser;
    }

    /**
     * Set iPostalCodeUser
     *
     * @param integer $iPostalCodeUser
     *
     * @return User
     */
    public function setPostalCodeUser($iPostalCodeUser)
    {
        $this->_iPostalCodeUser = $iPostalCodeUser;

        return $this;
    }

    /**
     * Get iPostalCodeUser
     *
     * @return integer
     */
    public function getPostalCodeUser()
    {
        return $this->_iPostalCodeUser;
    }

    /**
     * Set sTelUser
     *
     * @param string $sTelUser
     *
     * @return User
     */
    public function setTelUser($sTelUser)
    {
        $this->_sTelUser = $sTelUser;

        return $this;
    }

    /**
     * Get sTelUser
     *
     * @return string
     */
    public function getTelUser()
    {
        return $this->_sTelUser;
    }
}
