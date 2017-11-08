<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 01/11/2017
 * Time: 17:16
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\User;

/**
 * User
 *
 * @ORM\Table(name="token")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TokenRepository")
 */
class Token
{


    /**
     * @var int $_iIdUser
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user_token", referencedColumnName="id_user", nullable=false)
     */
    private $_iIdUser;

    /**
     * @var int $_iIdToken
     *
     * @ORM\Column(name="id_token", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_iIdToken;

    /**
     * @var string $_sLabelToken
     * @Assert\NotBlank()
     * @ORM\Column(name="label_token", type="string", length=255)
     */
    protected $_sLabelToken;


    /**
     * Get iIdToken
     *
     * @return integer
     */
    public function getIdToken()
    {
        return $this->_iIdToken;
    }

    /**
     * Set sLabelToken
     *
     * @param string $sLabelToken
     *
     * @return Token
     */
    public function setLabelToken($sLabelToken)
    {
        $this->_sLabelToken = $sLabelToken;

        return $this;
    }

    /**
     * Get sLabelToken
     *
     * @return string
     */
    public function getLabelToken()
    {
        return $this->_sLabelToken;
    }


    /**
     * Set iIdUser
     *
     * @param \AppBundle\Entity\User $iIdUser
     *
     * @return Token
     */
    public function setIdUser(\AppBundle\Entity\User $iIdUser)
    {
        $this->_iIdUser = $iIdUser;

        return $this;
    }

    /**
     * Get iIdUser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->_iIdUser;
    }
}
