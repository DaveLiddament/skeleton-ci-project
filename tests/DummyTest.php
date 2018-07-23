<?php

declare(strict_types=1);

namespace SkeletonProject\Tests;

use PHPUnit\Framework\TestCase;
use SkeletonProject\Dummy;

class DummyTest extends TestCase
{
    public function testIsTrue(): void
    {
        $dummy = new Dummy();
        $this->assertTrue($dummy->isTrue());
    }
}
