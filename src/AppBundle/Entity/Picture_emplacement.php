<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Picture_emplacement
 *
 * @ORM\Table(name="picture_emplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PictureEmplacementRepository")
 */
class Picture_emplacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_picture_emplacement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdPictureEmplacement;

    /**
     * @var string $_sRootPictureEmplacement
     *
     * @ORM\Column(name="root_picture_emplacement", type="string", length=255)
     */
    private $_sRootPictureEmplacement;

    /**
     * @var string $_sDescriptionPictureEmplacement
     *
     * @ORM\Column(name="description_picture_emplacement", type="string", length=255)
     */
    private $_sDescriptionPictureEmplacement;




    /**
     * Get iIdPictureEmplacement
     *
     * @return integer
     */
    public function getIdPictureEmplacement()
    {
        return $this->_iIdPictureEmplacement;
    }

    /**
     * Set sRootPictureEmplacement
     *
     * @param string $sRootPictureEmplacement
     *
     * @return Picture_emplacement
     */
    public function setRootPictureEmplacement($sRootPictureEmplacement)
    {
        $this->_sRootPictureEmplacement = $sRootPictureEmplacement;

        return $this;
    }

    /**
     * Get sRootPictureEmplacement
     *
     * @return string
     */
    public function getRootPictureEmplacement()
    {
        return $this->_sRootPictureEmplacement;
    }

    /**
     * Set sDescriptionPictureEmplacement
     *
     * @param string $sDescriptionPictureEmplacement
     *
     * @return Picture_emplacement
     */
    public function setDescriptionPictureEmplacement($sDescriptionPictureEmplacement)
    {
        $this->_sDescriptionPictureEmplacement = $sDescriptionPictureEmplacement;

        return $this;
    }

    /**
     * Get sDescriptionPictureEmplacement
     *
     * @return string
     */
    public function getDescriptionPictureEmplacement()
    {
        return $this->_sDescriptionPictureEmplacement;
    }
}
