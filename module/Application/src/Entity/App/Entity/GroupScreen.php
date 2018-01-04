<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupScreen
 *
 * @ORM\Table(name="group_screen")
 * @ORM\Entity
 */
class GroupScreen
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_type", type="string", length=8, nullable=false)
     */
    private $groupType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_screen_key", type="smallint", nullable=false)
     */
    private $groupScreenKey;

    /**
     * @var string
     *
     * @ORM\Column(name="group_screen_name", type="string", length=50, nullable=true)
     */
    private $groupScreenName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_mode", type="boolean", nullable=true)
     */
    private $groupMode;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_rows", type="smallint", nullable=true)
     */
    private $totalRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_cols", type="smallint", nullable=true)
     */
    private $totalCols;

    /**
     * @var integer
     *
     * @ORM\Column(name="space_rows", type="smallint", nullable=true)
     */
    private $spaceRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="space_cols", type="smallint", nullable=true)
     */
    private $spaceCols;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_rows", type="smallint", nullable=true)
     */
    private $screenRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="screen_cols", type="smallint", nullable=true)
     */
    private $screenCols;

    /**
     * @var string
     *
     * @ORM\Column(name="color_back", type="string", length=8, nullable=true)
     */
    private $colorBack;

    /**
     * @var string
     *
     * @ORM\Column(name="color_text", type="string", length=8, nullable=true)
     */
    private $colorText;


}

