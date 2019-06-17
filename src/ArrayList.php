<?php

namespace Lewy;

class ArrayList
{

  private $array;

  private $outOfBounds  = "Index out of bounds.";
  private $listEmpty    = "List is empty.";

  function __construct($array=[])
  {
    $this->array = $array;
  }

  public function get($index)
  {
    if(!isset($this->array[$index])) return $this->outOfBounds;

    return $this->array[$index];
  }

  public function add($value)
  {
    $this->array[] = $value;
  }

  public function remove($index)
  {
    if(!isset($this->array[$index])) return $this->outOfBounds;

    unset($this->array[$index]);
    $this->array = array_values($this->array);
  }

  public function set($index, $value)
  {
    if(!isset($this->array[$index])) return $this->outOfBounds;

    $this->array[$index] = $value;
  }

  public function last()
  {
    if(count($this->array) == 0) return $this->listEmpty;

    return $this->array[count($this->array)-1];
  }

  public function lastindex()
  {
    if(count($this->array) == 0) return $this->listEmpty;

    return count($this->array)-1;
  }

  public function size()
  {
    if(count($this->array) == 0) return $this->listEmpty;

    return count($this->array);
  }

  public function length()
  {
    if(count($this->array) == 0) return $this->listEmpty;

    return count($this->array)-1;
  }

  public function reverse()
  {
    $this->array = array_reverse($this->array);
  }

  public function sort($asc=true)
  {
    if($asc) sort($this->array);
    else rsort($this->array);
  }

  public function clear()
  {
    $this->array = [];
  }

  public function print()
  {
    print_r($this->array);
  }

}

?>
