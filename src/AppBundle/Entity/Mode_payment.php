<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mode_payment
 *
 * @ORM\Table(name="mode_payment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModePaymentRepository")
 */
class Mode_payment
{
    /**
     * @var int $_iIdPayment
     *
     * @ORM\Column(name="id_payment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="label_mode_payment", type="string", length=255)
     */
    private $_sLabelModePayment;


    /**
     * Get iIdPayment
     *
     * @return integer
     */
    public function getIdPayment()
    {
        return $this->_iIdPayment;
    }

    /**
     * Set sLabelModePayment
     *
     * @param string $sLabelModePayment
     *
     * @return Mode_payment
     */
    public function setLabelModePayment($sLabelModePayment)
    {
        $this->_sLabelModePayment = $sLabelModePayment;

        return $this;
    }

    /**
     * Get sLabelModePayment
     *
     * @return string
     */
    public function getLabelModePayment()
    {
        return $this->_sLabelModePayment;
    }
}
