<?php

namespace PHPUnit\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
  /**
   * Undocumented function
   *
   * @test
   */
  // public function manual()
  // {
  //   self::assertEquals(20, Math::sum([4, 4, 4, 4, 4]));
  //   self::assertEquals(10, Math::sum([5, 5]));
  // }

  /**
   * Undocumented function
   *
   * @param array $values
   * @param integer $expected
   * @dataProvider mathSumData
   */
  public function testDataProvider(array $values, int $expected)
  {
    self::assertEquals($expected, Math::sum($values));
  }

  public function mathSumData() : array
  {
    return [
      [[10, 10], 20],
      [[20, 20], 40],
      [[30, 30], 60],
      [[40, 40], 80],
      [[50, 50], 100],
    ];
  }

  /**
   * Undocumented function
   *
   * @param array $values
   * @param integer $expected
   * @testWith [[10, 10], 20]
   *           [[20, 20], 40]
   *           [[30, 30], 60]
   *           [[40, 40], 80]
   *           [[50, 50], 100]
   */
  public function testWith(array $values, int $expected)
  {
    self::assertEquals($expected, Math::sum($values));
  }
}