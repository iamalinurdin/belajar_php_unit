<?php

namespace PHPUnit\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
  /**
   * Undocumented function
   *
   * @test
   */
  // public function counter()
  // {
  //   $counter = new Counter;
  //   $counter->increment();
  //   $counter->increment();
    
  //   // Assert::assertEquals(1, $counter->getCounter());
  //   // OR
  //   $this->assertEquals(2, $counter->getCounter());
  // }

  /**
   * Undocumented function
   *
   * @test
   */
  // public function sayBadWord()
  // {
  //   $counter = new Counter;

  //   Assert::assertSame('GOBLOG', $counter->sayBadWord());
  // }

  private Counter $counter;

  public function setUp() : void
  {
    $this->counter = new Counter;
    echo "MEMBUAT COUNTER" . PHP_EOL;
  }

  public function testFirst() : Counter
  {
    $this->counter->increment();

    $this->assertEquals(1, $this->counter->getCounter());

    return $this->counter;
  }

  /**
   * Undocumented function
   *
   * @depends testFirst
   */
  public function testSecond(Counter $counter) : void
  {
    $counter->increment();

    $this->assertEquals(2, $counter->getCounter());
  }
}
