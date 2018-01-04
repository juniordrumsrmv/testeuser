<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item", uniqueConstraints={@ORM\UniqueConstraint(name="index_menu_item_0", columns={"menu_item_module", "menu_item_level", "menu_item_parent_id", "menu_item_seq", "menu_item_lang"})})
 * @ORM\Entity
 */
class MenuItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_id", type="string", length=20, nullable=false)
     */
    private $menuItemId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_parent_id", type="string", length=20, nullable=true)
     */
    private $menuItemParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_level", type="smallint", nullable=true)
     */
    private $menuItemLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_lang", type="string", length=6, nullable=true)
     */
    private $menuItemLang;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_module", type="string", length=20, nullable=true)
     */
    private $menuItemModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_group", type="smallint", nullable=true)
     */
    private $menuItemGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_item_seq", type="smallint", nullable=true)
     */
    private $menuItemSeq;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_authorization_id", type="string", length=10, nullable=true)
     */
    private $menuItemAuthorizationId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_href", type="string", length=255, nullable=true)
     */
    private $menuItemHref;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_title", type="string", length=255, nullable=true)
     */
    private $menuItemTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_text", type="string", length=255, nullable=true)
     */
    private $menuItemText;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_img_path", type="string", length=255, nullable=true)
     */
    private $menuItemImgPath;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_target", type="string", length=255, nullable=true)
     */
    private $menuItemTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_item_dir", type="string", length=255, nullable=true)
     */
    private $menuItemDir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item_type", type="boolean", nullable=true)
     */
    private $menuItemType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="menu_item_status", type="boolean", nullable=true)
     */
    private $menuItemStatus;


}

