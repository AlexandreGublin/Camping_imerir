<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 26/10/2017
 * Time: 12:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @var float $_fPricePayment
     * @ORM\Column(name="price_payment", type="float")
     */
    private $_fPricePayment;

    /**
     * @var \DateTime $_dDatePayment
     * @ORM\Column(name="date_payment", type="datetime")
     */
    private $_dDatePayment;





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
     * Set fPricePayment
     *
     * @param float $fPricePayment
     *
     * @return Payment
     */
    public function setPricePayment($fPricePayment)
    {
        $this->_fPricePayment = $fPricePayment;

        return $this;
    }

    /**
     * Get fPricePayment
     *
     * @return float
     */
    public function getPricePayment()
    {
        return $this->_fPricePayment;
    }

    /**
     * Set dDatePayment
     *
     * @param \DateTime $dDatePayment
     *
     * @return Payment
     */
    public function setDatePayment($dDatePayment)
    {
        $this->_dDatePayment = $dDatePayment;

        return $this;
    }

    /**
     * Get dDatePayment
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->_dDatePayment;
    }
}
