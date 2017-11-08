<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Type_event
 *
 * @ORM\Table(name="type_event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeEventRepository")
 */
class Type_event
{
    /**
     * @var int $_iIdTypeEvent
     *
     * @ORM\Column(name="id_type_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdTypeEvent;

    /**
     * @var string $_sLabelTypeEvent
     *
     * @ORM\Column(name="label_type_event", type="string", length=255)
     */
    private $_sLabelTypeEvent;



    /**
     * Get iIdTypeEvent
     *
     * @return integer
     */
    public function getIdTypeEvent()
    {
        return $this->_iIdTypeEvent;
    }

    /**
     * Set sLabelTypeEvent
     *
     * @param string $sLabelTypeEvent
     *
     * @return Type_event
     */
    public function setLabelTypeEvent($sLabelTypeEvent)
    {
        $this->_sLabelTypeEvent = $sLabelTypeEvent;

        return $this;
    }

    /**
     * Get sLabelTypeEvent
     *
     * @return string
     */
    public function getLabelTypeEvent()
    {
        return $this->_sLabelTypeEvent;
    }
}
