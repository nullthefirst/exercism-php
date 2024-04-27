<?php

class Position
{
  public $x;
  public $y;

  public function __construct($y, $x)
  {
    $this->y = $y;
    $this->x = $x;
  }

  public function getX()
  {
    return $this->x;
  }

  public function getY()
  {
    return $this->y;
  }
}
