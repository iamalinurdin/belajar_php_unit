<?php

namespace PHPUnit\Test;

use Exception;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
  public function testSuccess()
  {
    $person = new Person('Ali');
    $this->assertEquals("Hello Nurdin, my name is Ali", $person->sayHello('Nurdin'));
  }

  public function testException()
  {
    $person = new Person('Klopp');
    $this->expectException(Exception::class);
    $person->sayHello(null);
  }

  public function testGreeting()
  {
    $person = new Person('Klopp');

    $this->expectOutputString('HALO DUNIA');

    $person->greeting();
  }
}