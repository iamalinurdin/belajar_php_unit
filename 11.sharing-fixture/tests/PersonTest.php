<?php

namespace PHPUnit\Test;

use Exception;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
  private Person $person;

  public function setUp() : void
  {
    // $this->person = new Person('Ali');
    echo "SET UP" . PHP_EOL;
  }

  // OR

  /**
   * Undocumented function
   *
   * @before
   */
  public function initialize() : void
  {
    $this->person = new Person('Ali');
  }

  protected function tearDown() : void
  {
    echo "TEAR DOWN" . PHP_EOL;
  }

  // OR

  /**
   * Undocumented function
   *
   * @after
   */
  protected function after() : void
  {
    echo "AFTER" . PHP_EOL;
  }

  public function testSuccess()
  {
    $this->assertEquals("Hello Nurdin, my name is Ali", $this->person->sayHello('Nurdin'));
  }

  public function testException()
  {
    $this->expectException(Exception::class);
    $this->person->sayHello(null);
  }

  // public function testGreeting()
  // {
  //   $this->expectOutputString('HALO DUNIA' . PHP_EOL);

  //   $this->person->greeting();
  // }
}