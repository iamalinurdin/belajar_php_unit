<?php

namespace PHPUnit\Test;

class Counter
{
  private int $counter = 0;

  public function increment() : void
  {
    $this->counter++;
  }

  public function getCounter() : int
  {
    return $this->counter;
  }

  public function sayBadWord() : string
  {
    return "GOBLOG";
  }
}