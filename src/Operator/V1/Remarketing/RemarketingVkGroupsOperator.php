<?php

namespace Dsl\MyTarget\Operator\V1\Remarketing;

use Dsl\MyTarget\Client;
use Dsl\MyTarget\Domain\V1\Remarketing\RemarketingVkGroup;
use Dsl\MyTarget\Domain\V1\Remarketing\RemarketingVkGroupStat;
use Dsl\MyTarget\Mapper\Mapper;

class RemarketingVkGroupsOperator
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param array|null $context
     *
     * @return RemarketingVkGroupStat[]
     */
    public function all(array $context = null)
    {
        $context = (array)$context + ["limit-by" => "remarketing-vk-groups-find"];
        $json = $this->client->get("/api/v1/remarketing_vk_groups.json", null, $context);

        return array_map(function ($json) {
            return $this->mapper->hydrateNew(RemarketingVkGroupStat::class, $json);
        }, $json);
    }

    /**
     * @param RemarketingVkGroup $group
     * @param array|null $context
     *
     * @return RemarketingVkGroupStat
     */
    public function create(RemarketingVkGroup $group, array $context = null)
    {
        $context = (array)$context + ["limit-by" => "remarketing-vk-groups-find"];
        $rawGroup = $this->mapper->snapshot($group);

        $json = $this->client->post("/api/v1/remarketing_vk_groups.json", null, $rawGroup, $context);

        return $this->mapper->hydrateNew(RemarketingVkGroupStat::class, $json);
    }

    /**
     * @param int $id RemarketingVkGroupStat->id value (not vk's group_id)
     *
     * @param array|null $context
     */
    public function delete($id, array $context = null)
    {
        $context = (array)$context + ["limit-by" => "remarketing-vk-groups-delete"];
        $path = sprintf("/api/v1/remarketing_vk_groups/%d.json", $id);
        $this->client->delete($path, null, $context);
    }
}
