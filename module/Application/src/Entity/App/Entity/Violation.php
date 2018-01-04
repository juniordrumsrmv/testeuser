<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Violation
 *
 * @ORM\Table(name="violation")
 * @ORM\Entity
 */
class Violation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=true)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=true)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=50, nullable=true)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="column_name", type="string", length=50, nullable=true)
     */
    private $columnName;

    /**
     * @var string
     *
     * @ORM\Column(name="old_data", type="string", length=50, nullable=true)
     */
    private $oldData;

    /**
     * @var string
     *
     * @ORM\Column(name="new_data", type="string", length=50, nullable=true)
     */
    private $newData;

    /**
     * @var integer
     *
     * @ORM\Column(name="ecf_number", type="smallint", nullable=true)
     */
    private $ecfNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="plu_key", type="bigint", nullable=true)
     */
    private $pluKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=true)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ticket", type="integer", nullable=true)
     */
    private $ticket;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50, nullable=true)
     */
    private $user;


}

