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

  public function testFirst() : Counter
  {
    $counter = new Counter;
    $counter->increment();

    $this->assertEquals(1, $counter->getCounter());

    return $counter;
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
