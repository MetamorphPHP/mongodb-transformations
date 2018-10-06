<?php
declare(strict_types=1);

namespace Metamorph\MongoDB\Transformation;

use Metamorph\MetamorphTransformation;
use MongoDB\BSON\Binary;
use Ramsey\Uuid\Uuid;

final class BinaryToString implements MetamorphTransformation
{
    /** $from Binary */
    public function transform($from)
    {
        return (string) Uuid::fromBytes($from->getData);
    }
}