<?php

namespace Kopernikus\ParallelParatests\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class ItShouldTestInPallarel extends TestCase
{
    #[DataProvider('delayProvider')]
    public function testItRunsTestsInParallel(int $delay)
    {
        sleep($delay);
        $this->assertTrue(true);
    }

    public static function delayProvider()
    {
        return array_map(function ($value) {
            return [$value];
        }, array_fill(0, 10, 1));
    }
}