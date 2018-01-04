<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataEntry
 *
 * @ORM\Table(name="data_entry")
 * @ORM\Entity
 */
class DataEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="data_entry_key", type="integer", nullable=false)
     */
    private $dataEntryKey;

    /**
     * @var string
     *
     * @ORM\Column(name="initial_prompt", type="string", length=80, nullable=true)
     */
    private $initialPrompt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;


}

