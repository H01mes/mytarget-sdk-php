<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Enum\RemarketingType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingGroupMembership
{
    /**
     * @var RemarketingType
     * @Field(type="Koma136\MyTarget\Domain\V1\Enum\RemarketingType")
     */
    private $type;

    /**
     * @var int
     * @Field(name="group_id", type="int")
     */
    private $groupId;

    /**
     * @var int
     * @Field(name="scope_id", type="int")
     */
    private $scopeId;

    /**
     * @param RemarketingType $type
     * @param int $groupId
     * @param int $scopeId
     */
    public function __construct(RemarketingType $type, $groupId, $scopeId)
    {
        $this->type = $type;
        $this->groupId = $groupId;
        $this->scopeId = $scopeId;
    }

    /**
     * @return RemarketingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getScopeId()
    {
        return $this->scopeId;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
