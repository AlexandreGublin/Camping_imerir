<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmplacementRepository")
 */
class Emplacement
{
    /**
     * @var int $_iIdEmplacement
     *
     * @ORM\Column(name="id_emplacement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdEmplacement;

    /**
     * @var string $_sNameEmplacement
     * @Assert\NotBlank()
     * @ORM\Column(name="name_emplacement", type="string", length=255)
     */
    private $_sNameEmplacement;

    /**
     * @var float $_fPriceEmplacement
     * @Assert\NotBlank()
     * @ORM\Column(name="price_emplacement", type="float")
     */
    private $_fPriceEmplacement;

    /**
     * @var integer $_iSurfaceEmplacement
     * @Assert\NotBlank()
     * @ORM\Column(name="surface_emplacement", type="integer")
     */
    private $_iSurfaceEmplacement;

     /**
     * @var integer $_iNbMaxPersonsEmplacement
     * @ORM\Column(name="nb_max_persons_emplacement", type="integer", nullable=true)
     */
    private $_iNbMaxPersonsEmplacement;
    
     /**
     * @var integer $_iNbRoomsEmplacement
     * @ORM\Column(name="nb_rooms_emplacement", type="integer", nullable=true)
     */
    private $_iNbRoomsEmplacement;

    /**
     * @ORM\Column(name="lat_emplacement", type="string", nullable=true)
     */
    private $_sLatEmplacement;

    /**
     * @ORM\Column(name="lng_emplacement", type="string", nullable=true)
     */
    private $_sLngEmplacement;

    

    /**
     * @return int
     */
    public function getIdEmplacement()
    {
        return $this->_iIdEmplacement;
    }

    /**
     * @param int $iIdEmplacement
     */
    public function setIdEmplacement($iIdEmplacement)
    {
        $this->_iIdEmplacement = $iIdEmplacement;
    }

    /**
     * @return string
     */
    public function getNameEmplacement()
    {
        return $this->_sNameEmplacement;
    }

    /**
     * @param string $sNameEmplacement
     */
    public function setNameEmplacement($sNameEmplacement)
    {
        $this->_sNameEmplacement = $sNameEmplacement;
    }

    /**
     * @return float
     */
    public function getPriceEmplacement()
    {
        return $this->_fPriceEmplacement;
    }

    /**
     * @param float $fPriceEmplacement
     */
    public function setPriceEmplacement($fPriceEmplacement)
    {
        $this->_fPriceEmplacement = $fPriceEmplacement;
    }

    /**
     * @return int
     */
    public function getSurfaceEmplacement()
    {
        return $this->_iSurfaceEmplacement;
    }

    /**
     * @param int $iSurfaceEmplacement
     */
    public function setSurfaceEmplacement($iSurfaceEmplacement)
    {
        $this->_iSurfaceEmplacement = $iSurfaceEmplacement;
    }

    /**
     * @return int
     */
    public function getNbMaxPersonsEmplacement()
    {
        return $this->_iNbMaxPersonsEmplacement;
    }

    /**
     * @param int $iNbMaxPersonsEmplacement
     */
    public function setNbMaxPersonsEmplacement($iNbMaxPersonsEmplacement)
    {
        $this->_iNbMaxPersonsEmplacement = $iNbMaxPersonsEmplacement;
    }

    /**
     * @return int
     */
    public function getNbRoomsEmplacement()
    {
        return $this->_iNbRoomsEmplacement;
    }

    /**
     * @param int $iNbRoomsEmplacement
     */
    public function setINbRoomsEmplacement($iNbRoomsEmplacement)
    {
        $this->_iNbRoomsEmplacement = $iNbRoomsEmplacement;
    }

    /**
     * @return string
     */
    public function getLatEmplacement()
    {
        return $this->_sLatEmplacement;
    }

    /**
     * @param string $sLatEmplacement
     */
    public function setLatEmplacement($sLatEmplacement)
    {
        $this->_sLatEmplacement = $sLatEmplacement;
    }

    /**
     * @return string
     */
    public function getLngEmplacement()
    {
        return $this->_sLngEmplacement;
    }

    /**
     * @param string $sLngEmplacement
     */
    public function setLngEmplacement($sLngEmplacement)
    {
        $this->_sLngEmplacement = $sLngEmplacement;
    }

}


