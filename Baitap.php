<?php
/*Bài 2
class Point2D 
{
    protected $x;
    protected $y;
public function __construct ($x1, $y1, $x2, $y2)
{
    $this->x1=$x1;
    $this->y1=$y1;
    $this->x2=$x2;
    $this->y2=$y2;
}
public function calculate_distance()
{
    return sqrt(($this->x2 - $this->x1)**2 + ($this->y2 - $this->y1)**2);
}
}

$x1=2; $y1=3;
$x2=5; $y2=6;
$Point2D = new Point2D($x1, $y1, $x2, $y2);
echo "calculate_distance: ".$Point2D->calculate_distance();
*/
//Bài 3
class IntegerArray 
{
    protected $arr;
public function __construct ($arr)
{
    $this->array=$arr;
}
public function calculate_sum()
{
    return sum($this->array);
}
public function calculate_average()
{
    $count=count($this->array);
    if $count == 0:
        return 0;
    return sum($this->array) / $count;
}
public function find_maximum()
{
    $count=count($this->array);
    if $count == 0:
        return None;
    return max($this->array);
}
}
$arr = IntegerArray([2, 4, 6, 8, 10])
$IntegerArray = new IntegerArray($arr)
echo "Sum:" .$IntegerArray->calculate_sum();
echo "Average:" .$IntegerArray->calculate_average();
echo "Max:" .$IntegerArray->find_maximum();
