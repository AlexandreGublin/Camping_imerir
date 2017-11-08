<?php



/**
 * Created by PhpStorm.
 * User: student
 * Date: 26/10/2017
 * Time: 12:02
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @var int $_iIdInvoice
     *
     * @ORM\Column(name="id_invoice", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdInvoice;

    /**
     * @var \DateTime $_dDateInvoice
     * @ORM\Column(name="date_invoice", type="datetime")
     */
    private $_dDateInvoice;







    /**
     * Get iIdInvoice
     *
     * @return integer
     */
    public function getIdInvoice()
    {
        return $this->_iIdInvoice;
    }

    /**
     * Set dDateInvoice
     *
     * @param \DateTime $dDateInvoice
     *
     * @return Invoice
     */
    public function setDateInvoice($dDateInvoice)
    {
        $this->_dDateInvoice = $dDateInvoice;

        return $this;
    }

    /**
     * Get dDateInvoice
     *
     * @return \DateTime
     */
    public function getDateInvoice()
    {
        return $this->_dDateInvoice;
    }
}
