<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Location_event
 *
 * @ORM\Table(name="location_event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationEventRepository")
 */
class Location_event
{
    /**
     * @var int $_iIdLocationEvent
     *
     * @ORM\Column(name="id_location_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdLocationEvent;

    /**
     * @var string $_sLabelLocationEvent
     *
     * @ORM\Column(name="label_location_event", type="string", length=255)
     */
    private $_sLabelLocationEvent;

    /**
     * @var string $_dLatLocationEvent
     *
     * @ORM\Column(name="lat_location_event", type="decimal", precision=10, scale=5)
     */
    private $_dLatLocationEvent;

    /**
     * @var string $_dLngLocationEvent
     *
     * @ORM\Column(name="lng_location_event", type="decimal", precision=10, scale=5)
     */
    private $_dLngLocationEvent;



    /**
     * Get iIdLocationEvent
     *
     * @return integer
     */
    public function getIdLocationEvent()
    {
        return $this->_iIdLocationEvent;
    }

    /**
     * Set sLabelLocationEvent
     *
     * @param string $sLabelLocationEvent
     *
     * @return Location_event
     */
    public function setLabelLocationEvent($sLabelLocationEvent)
    {
        $this->_sLabelLocationEvent = $sLabelLocationEvent;

        return $this;
    }

    /**
     * Get sLabelLocationEvent
     *
     * @return string
     */
    public function getLabelLocationEvent()
    {
        return $this->_sLabelLocationEvent;
    }

    /**
     * Set dLatLocationEvent
     *
     * @param string $dLatLocationEvent
     *
     * @return Location_event
     */
    public function setLatLocationEvent($dLatLocationEvent)
    {
        $this->_dLatLocationEvent = $dLatLocationEvent;

        return $this;
    }

    /**
     * Get dLatLocationEvent
     *
     * @return string
     */
    public function getLatLocationEvent()
    {
        return $this->_dLatLocationEvent;
    }

    /**
     * Set dLngLocationEvent
     *
     * @param string $dLngLocationEvent
     *
     * @return Location_event
     */
    public function setLngLocationEvent($dLngLocationEvent)
    {
        $this->_dLngLocationEvent = $dLngLocationEvent;

        return $this;
    }

    /**
     * Get dLngLocationEvent
     *
     * @return string
     */
    public function getLngLocationEvent()
    {
        return $this->_dLngLocationEvent;
    }
}
