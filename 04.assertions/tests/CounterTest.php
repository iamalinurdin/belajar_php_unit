<?php

namespace PHPUnit\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
  public function testCounter()
  {
    $counter = new Counter;
    $counter->increment();
    $counter->increment();
    
    // Assert::assertEquals(1, $counter->getCounter());
    // OR
    $this->assertEquals(2, $counter->getCounter());
  }

  public function testSayBadWord()
  {
    $counter = new Counter;

    Assert::assertSame('GOBLOG', $counter->sayBadWord());
  }
}
