<?php

namespace PHPUnit\Test;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
  public function testCounter()
  {
    $counter = new Counter;
    $counter->increment();
    echo $counter->getCounter() . PHP_EOL;
  }

  public function testOther()
  {
    echo "Other GOBLOG" . PHP_EOL;
  }
}
