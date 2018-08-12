<?php
declare(strict_types=1);

namespace Metamorph\MongoDB\Transformation;

use Metamorph\MetamorphTransformation;
use MongoDB\BSON\Binary;

final class UuidToBinary implements MetamorphTransformation
{
    /** $from UuidInterface */
    public function transform($from)
    {
        $data = $from->getBytes();

        return new Binary($data, Binary::TYPE_UUID);
    }
}