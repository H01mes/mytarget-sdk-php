<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Domain\V2\Enum\CreativeType;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Domain\V2\Creative;
use Koma136\MyTarget\Domain\V2\UploadCreative;
use Psr\Http\Message\StreamInterface;
use Koma136\MyTarget as f;
use Koma136\MyTarget\Context;

class CreativeOperator
{
    const LIMIT_CREATE = "v2-creative-create";

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
     * @param resource|string|StreamInterface $file Can be a StreamInterface instance, resource or a file path
     * @param CreativeType $type
     * @param UploadCreative $creative
     * @param string|null $filename
     * @param Context|null $context
     *
     * @return Creative
     */
    public function create($file, CreativeType $type, UploadCreative $creative, $filename = null, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $file = f\streamOrResource($file);

        $rawCreative = $this->mapper->snapshot($creative);
        $body = [
            ["name" => "file", "contents" => $file, "filename" => $filename],
            ["name" => "data", "contents" => \json_encode($rawCreative)]];

        $path = sprintf("/api/v2/content/%s.json", $type->getValue());
        $json = $this->client->postMultipart($path, $body, null, $context);

        return $this->mapper->hydrateNew(Creative::class, $json);
    }
}
