<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosProgram
 *
 * @ORM\Table(name="pos_program")
 * @ORM\Entity
 */
class PosProgram
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_key", type="bigint", nullable=false)
     */
    private $storeKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_number", type="smallint", nullable=false)
     */
    private $posNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="program_id", type="string", length=20, nullable=false)
     */
    private $programId;

    /**
     * @var string
     *
     * @ORM\Column(name="program_version", type="string", length=255, nullable=true)
     */
    private $programVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="program_version_line", type="string", length=255, nullable=true)
     */
    private $programVersionLine;

    /**
     * @var string
     *
     * @ORM\Column(name="program_executable", type="string", length=255, nullable=true)
     */
    private $programExecutable;


}

