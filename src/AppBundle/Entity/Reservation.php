<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 26/10/2017
 * Time: 11:04
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int $_iIdReservation
     *
     * @ORM\Column(name="id_reservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdReservation;

    /**
     * @var \DateTime $_dDateReservation
     * @Assert\NotBlank()
     * @ORM\Column(name="date_reservation", type="datetime")
     */
    private $_dDateReservation;

    /**
     * @var \DateTime $_dDateEntryReservation
     * @Assert\NotBlank()
     * @ORM\Column(name="date_entry_reservation", type="datetime")
     */
    private $_dDateEntryReservation;


     /**
      * @var \DateTime $_dDateReleaseReservation
      * @Assert\NotBlank()
      * @ORM\Column(name="date_release_reservation", type="datetime")
      */
    private $_dDateReleaseReservation;


    /**
     * @var int $_iNbPersonsReservation
     * @Assert\NotBlank()
     * @ORM\Column(name="nb_persons_reservation", type="integer")
     */
    private $_iNbPersonsReservation;

    /**
     * @var string $_iNbPersonsReservation
     * @ORM\Column(name="qrcode_reservation", type="string")
     */
    private $_sQrcodeReservation;




    /**
     * Get iIdReservation
     *
     * @return integer
     */
    public function getIdReservation()
    {
        return $this->_iIdReservation;
    }

    /**
     * Set dDateReservation
     *
     * @param \DateTime $dDateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dDateReservation)
    {
        $this->_dDateReservation = $dDateReservation;

        return $this;
    }

    /**
     * Get dDateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->_dDateReservation;
    }

    /**
     * Set dDateEntryReservation
     *
     * @param \DateTime $dDateEntryReservation
     *
     * @return Reservation
     */
    public function setDateEntryReservation($dDateEntryReservation)
    {
        $this->_dDateEntryReservation = $dDateEntryReservation;

        return $this;
    }

    /**
     * Get dDateEntryReservation
     *
     * @return \DateTime
     */
    public function getDateEntryReservation()
    {
        return $this->_dDateEntryReservation;
    }

    /**
     * Set dDateReleaseReservation
     *
     * @param \DateTime $dDateReleaseReservation
     *
     * @return Reservation
     */
    public function setDateReleaseReservation($dDateReleaseReservation)
    {
        $this->_dDateReleaseReservation = $dDateReleaseReservation;

        return $this;
    }

    /**
     * Get dDateReleaseReservation
     *
     * @return \DateTime
     */
    public function getDateReleaseReservation()
    {
        return $this->_dDateReleaseReservation;
    }

    /**
     * Set iNbPersonsReservation
     *
     * @param integer $iNbPersonsReservation
     *
     * @return Reservation
     */
    public function setNbPersonsReservation($iNbPersonsReservation)
    {
        $this->_iNbPersonsReservation = $iNbPersonsReservation;

        return $this;
    }

    /**
     * Get iNbPersonsReservation
     *
     * @return integer
     */
    public function getNbPersonsReservation()
    {
        return $this->_iNbPersonsReservation;
    }

    /**
     * Set sQrcodeReservation
     *
     * @param string $sQrcodeReservation
     *
     * @return Reservation
     */
    public function setQrcodeReservation($sQrcodeReservation)
    {
        $this->_sQrcodeReservation = $sQrcodeReservation;

        return $this;
    }

    /**
     * Get sQrcodeReservation
     *
     * @return string
     */
    public function getQrcodeReservation()
    {
        return $this->_sQrcodeReservation;
    }
}
