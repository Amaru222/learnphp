<?php
class Data
{
  public $name;
  public $type;
  public $uploadDate;
  public $size;

  function __construct($name, $type, $uploadDate, $size)
  {
    $this->name = $name;
    $this->type = $type;
    $this->uploadDate = $uploadDate;
    $this->size = $size;
  }
}
