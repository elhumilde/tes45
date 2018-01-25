<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distribution
 *
 * @ORM\Table(name="distribution")
 * @ORM\Entity
 */
class Distribution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reg_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_date", type="datetime", nullable=false)
     */
    private $regDate;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=50, nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;


}
