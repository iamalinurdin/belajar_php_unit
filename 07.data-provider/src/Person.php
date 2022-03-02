<?php

namespace PHPUnit\Test;

use Exception;

class Person
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello(?string $name)
  {
    if (is_null($name)) throw new Exception('Name is null');

    return "Hello $name, my name is $this->name";
  }
}