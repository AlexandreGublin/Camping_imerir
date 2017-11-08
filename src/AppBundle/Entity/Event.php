<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_event", type="datetime")
     */
    private $_dDateEvent;

    /**
     * @var string $_sNameEvent
     *
     * @ORM\Column(name="name_event", type="string", length=255)
     */
    private $_sNameEvent;



    /**
     * Get iIdEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->_iIdEvent;
    }

    /**
     * Set dDateEvent
     *
     * @param \DateTime $dDateEvent
     *
     * @return Event
     */
    public function setDateEvent($dDateEvent)
    {
        $this->_dDateEvent = $dDateEvent;

        return $this;
    }

    /**
     * Get dDateEvent
     *
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->_dDateEvent;
    }

    /**
     * Set sNameEvent
     *
     * @param string $sNameEvent
     *
     * @return Event
     */
    public function setNameEvent($sNameEvent)
    {
        $this->_sNameEvent = $sNameEvent;

        return $this;
    }

    /**
     * Get sNameEvent
     *
     * @return string
     */
    public function getNameEvent()
    {
        return $this->_sNameEvent;
    }
}
