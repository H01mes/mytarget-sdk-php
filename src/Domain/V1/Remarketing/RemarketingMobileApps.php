<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Enum\RemarketingType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingMobileApps extends RemarketingInterval
{
    /**
     * @var int
     * @Field(name="mobile_app_id", type="int")
     */
    private $mobileAppId;

    /**
     * @var string
     * @Field(name="install_type", type="string")
     */
    private $installType;

    /**
     * @param int $mobileAppId
     * @param string $installType
     * @param int $left
     * @param int $right
     * @param RemarketingType $type
     */
    public function __construct($mobileAppId, $installType, $left, $right, RemarketingType $type)
    {
        parent::__construct($left, $right, $type);

        $this->mobileAppId = $mobileAppId;
        $this->installType = $installType;
    }

    /**
     * @return int
     */
    public function getMobileAppId()
    {
        return $this->mobileAppId;
    }

    /**
     * @return string
     */
    public function getInstallType()
    {
        return $this->installType;
    }
}
