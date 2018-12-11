<?php
declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace SwoftTest\Bean\Cases;

use SwoftTest\Bean\Testing\ExampleConfig;

class ValueTest extends AbstractTestCase
{
    public function testIntValue()
    {
        $config = bean(ExampleConfig::class);
        $intValue = $config->getIntValue();

        $this->assertSame(1, $intValue);
    }

    public function testStringValue()
    {
        $config = bean(ExampleConfig::class);
        $value = $config->getStringValue();

        $this->assertSame('Hello Swoft', $value);
    }

    public function testBoolValue()
    {
        $config = bean(ExampleConfig::class);
        $value = $config->isBoolValue();

        $this->assertSame(false, $value);
    }

    public function testArrayValue()
    {
        $config = bean(ExampleConfig::class);
        $value = $config->getArrayValue();

        $this->assertSame(['Swoft', 'Swoole'], $value);
    }
}