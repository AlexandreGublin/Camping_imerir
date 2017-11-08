<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Organizer_event
 *
 * @ORM\Table(name="organizer_event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganizerEventRepository")
 */
class Organizer_event
{
    /**
     * @var int $_iIdOrganizerEvent
     *
     * @ORM\Column(name="id_organizer_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdOrganizerEvent;

    /**
     * @var string $sNameOrganizerEvent
     *
     * @ORM\Column(name="name_organizer_event", type="string", length=255)
     */
    private $sNameOrganizerEvent;

    /**
     * @var string $sTelOrganizerEvent
     *
     * @ORM\Column(name="tel_organizer_event", type="string", length=255)
     */
    private $sTelOrganizerEvent;

    /**
     * @var string $sEmailOrganizerEvent
     *
     * @ORM\Column(name="email_organizer_event", type="string", length=255)
     */
    private $sEmailOrganizerEvent;


    /**
     * Get iIdOrganizerEvent
     *
     * @return integer
     */
    public function getIdOrganizerEvent()
    {
        return $this->_iIdOrganizerEvent;
    }

    /**
     * Set sNameOrganizerEvent
     *
     * @param string $sNameOrganizerEvent
     *
     * @return Organizer_event
     */
    public function setNameOrganizerEvent($sNameOrganizerEvent)
    {
        $this->sNameOrganizerEvent = $sNameOrganizerEvent;

        return $this;
    }

    /**
     * Get sNameOrganizerEvent
     *
     * @return string
     */
    public function getNameOrganizerEvent()
    {
        return $this->sNameOrganizerEvent;
    }

    /**
     * Set sTelOrganizerEvent
     *
     * @param string $sTelOrganizerEvent
     *
     * @return Organizer_event
     */
    public function setTelOrganizerEvent($sTelOrganizerEvent)
    {
        $this->sTelOrganizerEvent = $sTelOrganizerEvent;

        return $this;
    }

    /**
     * Get sTelOrganizerEvent
     *
     * @return string
     */
    public function getTelOrganizerEvent()
    {
        return $this->sTelOrganizerEvent;
    }

    /**
     * Set sEmailOrganizerEvent
     *
     * @param string $sEmailOrganizerEvent
     *
     * @return Organizer_event
     */
    public function setEmailOrganizerEvent($sEmailOrganizerEvent)
    {
        $this->sEmailOrganizerEvent = $sEmailOrganizerEvent;

        return $this;
    }

    /**
     * Get sEmailOrganizerEvent
     *
     * @return string
     */
    public function getEmailOrganizerEvent()
    {
        return $this->sEmailOrganizerEvent;
    }
}
