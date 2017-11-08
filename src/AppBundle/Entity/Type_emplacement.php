<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Type_emplacement
 *
 * @ORM\Table(name="type_emplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeEmplacementRepository")
 */
class Type_emplacement
{
    /**
     * @var int $_iIdTypeEmplacement
     *
     * @ORM\Column(name="id_type_emplacement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_iIdTypeEmplacement;

    /**
     * @var string $_sLabelTypeEmplacement
     *
     * @ORM\Column(name="label_type_emplacement", type="string", length=255)
     */
    private $_sLabelTypeEmplacement;



    /**
     * Get iIdTypeEmplacement
     *
     * @return integer
     */
    public function getIdTypeEmplacement()
    {
        return $this->_iIdTypeEmplacement;
    }

    /**
     * Set sLabelTypeEmplacement
     *
     * @param string $sLabelTypeEmplacement
     *
     * @return Type_emplacement
     */
    public function setLabelTypeEmplacement($sLabelTypeEmplacement)
    {
        $this->_sLabelTypeEmplacement = $sLabelTypeEmplacement;

        return $this;
    }

    /**
     * Get sLabelTypeEmplacement
     *
     * @return string
     */
    public function getLabelTypeEmplacement()
    {
        return $this->_sLabelTypeEmplacement;
    }
}
