<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerDependents
 *
 * @ORM\Table(name="customer_dependents")
 * @ORM\Entity
 */
class CustomerDependents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_key", type="bigint", nullable=false)
     */
    private $customerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="dependent_id", type="bigint", nullable=false)
     */
    private $dependentId;

    /**
     * @var string
     *
     * @ORM\Column(name="dependent_name", type="string", length=60, nullable=true)
     */
    private $dependentName;


}

