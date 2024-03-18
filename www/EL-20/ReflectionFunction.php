<?php

class ReflectionFunction
{
/**
 * @param $a
 * @param $b
 * @return int
 */
function sum($a, $b)
  {
    return $a + $b;
  }
};

$sumReflector = new ReflectionFunction('sum');

echo $sumReflector->getFileName();
echo $sumReflector->getStartLine();
echo $sumReflector->getEndLine();
echo $sumReflector->getDocComment();