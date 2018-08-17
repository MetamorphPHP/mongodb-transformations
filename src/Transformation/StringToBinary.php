<?php
declare(strict_types=1);

namespace Metamorph\MongoDB\Transformation;

use Metamorph\MetamorphTransformation;
use MongoDB\BSON\Binary;
use Ramsey\Uuid\Uuid;

final class StringToBinary implements MetamorphTransformation
{
    /** $from string */
    public function transform($from)
    {
        $data = Uuid::fromString($from)->getBytes();

        return new Binary($data, Binary::TYPE_UUID);
    }
}