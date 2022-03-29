<?php

function isEven(int $value) : bool
{
  if ($value % 2 === 0) return true;
  else return false;
}

function isEven1(int $value) : bool
{
  return ($value % 2 === 0);
}
var_dump(isEven(1));
var_dump(isEven(2));
var_dump(isEven(3));
var_dump(isEven(4));
var_dump(isEven(5));
echo "\n\n";
var_dump(isEven1(1));
var_dump(isEven1(2));
var_dump(isEven1(3));
var_dump(isEven1(4));
var_dump(isEven1(5));