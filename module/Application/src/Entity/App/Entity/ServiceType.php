<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceType
 *
 * @ORM\Table(name="service_type")
 * @ORM\Entity
 */
class ServiceType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="service_type_key", type="smallint", nullable=false)
     */
    private $serviceTypeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="service_name", type="string", length=50, nullable=true)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_report_header", type="blob", length=65535, nullable=true)
     */
    private $serviceReportHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="service_report_footer", type="blob", length=65535, nullable=true)
     */
    private $serviceReportFooter;

    /**
     * @var string
     *
     * @ORM\Column(name="service_report_detail", type="blob", length=65535, nullable=true)
     */
    private $serviceReportDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="service_display_name", type="string", length=50, nullable=true)
     */
    private $serviceDisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_short_name", type="string", length=50, nullable=true)
     */
    private $serviceShortName;


}

