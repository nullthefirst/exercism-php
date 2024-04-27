<?php

class Size
{
  public $width;
  public $height;

  public function __construct($height, $width)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function getHeight()
  {
    return $this->height;
  }
}
