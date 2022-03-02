<?php

namespace PHPUnit\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
  public static Counter $counter;

  // public static function setUpBeforeClass() : void
  // {
  //   self::$counter = new Counter;
  // }

  // OR

  /**
   * Undocumented function
   *
   * @beforeClass
   */
  public static function runBefore()
  {
    self::$counter = new Counter;
  }


  // public static function tearDownAfterClass(): void
  // {
  //   echo "TEST SELESAI";
  // }

  // OR

  /**
   * Undocumented function
   *
   * @afterClass
   */
  public static function runAfter(): void
  {
    echo "TEST SELESAI";
  }

  public function testFirst()
  {
    self::$counter->increment();

    $this->assertEquals(1, self::$counter->getCounter());
  }

  public function testSecond()
  {
    self::$counter->increment();

    $this->assertEquals(2, self::$counter->getCounter());
  }
}