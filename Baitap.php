<?php
//Bài 1
class Rectangle {
    protected $length;
    protected $width;

    public function __construct ($length, $width)
    {
        $this->length= $length;
        $this->width= $width;
    }
    public function calArea()
    {
        return $this->length* $this->width;
    }
    public function calPerimeter()
    {
        return ($this->length + $this->width) *2;
    }
}
$length= 12;
$width= 6;
$rectangle= new Rectangle ($length, $width);
echo "Area of rectangle: " .$rectangle->calArea(). ";<br>";
echo " Area of perimeter: "  .$rectangle->calPerimeter(). ".";


//Bài 2
class Point2D {
    protected $x;
    protected $y;

    public function __construct ($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function calculateDistance(Point2D $point2D)
    {
        return sqrt(pow($this->x - $point2D->x, 2) + pow($this->y- $point2D->y, 2) );
    }
}
$x= 5;
$y = 7;
$point2d= new Point2D ($x,$y);
$x1= 3;
$y1= 5;
$point2D = new Point2D($x1, $y1);
echo "Calculate Distance is: " .$point2D->calculateDistance($point2D);


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
    $count= count($this->array);
        if($count === 0)
        {
            return 0;
        }
        return ($this->calculate_sum()) / $count;
}
public function find_maximum()
{
    return max($this->array);
}
}
$arr = IntegerArray([2, 4, 6, 8, 10])
$IntegerArray = new IntegerArray($arr)
echo "Sum:" .$IntegerArray->calculate_sum();
echo "Average:" .$IntegerArray->calculate_average();
echo "Max:" .$IntegerArray->find_maximum();


//Bài 4
class Watch{
    protected $hour;
    protected $minute;
    protected $second;
 public function __construct($hour, $minute, $second){
    $this -> hour = $hour;
    $this -> minute = $minute;
    $this -> second = $second;

 }
 public function showTheTime(){
    $hour= str_pad($this->hour,2,'0', STR_PAD_LEFT);
    $minute= str_pad($this->minute,2,'0', STR_PAD_LEFT);
    $second = str_pad($this->second,2,'0', STR_PAD_LEFT);
    print "{$hour}:{$minute}:{$second}\n";

 }
 public function increaseSeconds(){
    $this ->second++;
    if($this ->second >=60){
        $this->second = 0;
        $this -> minute++; 

         if ($this -> minute >=60){
             $this -> minute = 0;
             $this -> hour++;   
               
             if ($this -> hour >=24){
                 $this ->hour=0;
             }
          }
    }
 }
}
$watch=new watch(22,60,60);
$watch->increaseSeconds();
$watch->showTheTime();


// Bài 5
class Student {
    private $ID;
    private $fullName;
    public function __construct($ID, $fullName) {
        $this->ID = $ID;
        $this->fullName = $fullName;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function getID() {
        return $this->ID;
    }
}

class StudentList {
    private $list;

    public function __construct() {
        $this->list = array();
    }

    public function addStudent($student) {
        $this->list[] = $student;
    }

    public function getList() {
        return $this->list;
    }
}

$student_1 = new Student("S001", "John Doe");
$student_2 = new Student("S002", "Just Me");

$studentList = new StudentList();

$studentList->addStudent($student_1);
$studentList->addStudent($student_2);

$students = $studentList->getList();

foreach ($students as $student) {
    echo "ID: " . $student->getID() . "<br>";
    echo "Full Name: " . $student->getFullName() . "<br>";
}


// Bài 6
class Car {
    private $company;
    private $color;
    private $yearOfProduction;

    public function __construct($company, $color, $yearOfProduction) {
        $this->company = $company;
        $this->color = $color;
        $this->yearOfProduction = $yearOfProduction;

    }

    public function getCompany() {
        return $this->company;
    }

    public function getColor() {
        return $this->color;
    }

    public function getYearOfProduction() {
        return $this->yearOfProduction;
    }
}

$car = new Car('Volvo', 'Red', '2023');
echo "Company: {$car->getCompany()}<br>Color: {$car->getColor()}<br>Year of production: {$car->getYearOfProduction()}<br>";


// Bài 7
class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function sum($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator + $this->denominator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function subtract($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator - $this->denominator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function multiply($newFraction) {
        $newNumerator = $this->numerator * $newFraction->numerator;
        $newDenominator = $this->denominator * $newFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function divide($newFraction) {
        $newNumerator = $this->numerator * $newFraction->denominator;
        $newDenominator = $this->denominator * $newFraction->numerator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function toString() {
        return $this->numerator . '/' . $this->denominator;
    }
}

$fraction_1 = new Fraction(1, 2);
$fraction_2 = new Fraction(3, 4);

$sum = $fraction_1->sum($fraction_2);
echo "Sum: " . $sum->toString() . "<br>";

$difference = $fraction_1->subtract($fraction_2);
echo "Subtract: " . $difference->toString() . "<br>";

$product = $fraction_1->multiply($fraction_2);
echo "Multiply: " . $product->toString() . "<br>";

$quotient = $fraction_1->divide($fraction_2);
echo "Divide: " . $quotient->toString() . "<br>";


// Bài 8
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAddress() {
        return $this->address;
    }
}

$person = new Person('Just Me', '21', 'Viet Nam');
echo "Name: {$person->getName()}<br>Age: {$person->getAge()}<br>Address: {$person->getAddress()}<br>";


// Bài 9
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }
}

$product = new Product('Just Me', '21', 'Viet Nam');
echo "Name: {$product->getName()}<br>Age: {$product->getPrice()}<br>Address: {$product->getDescription()}<br>";


// Bài 10
class RoomOrder {
    private $name;
    private $checkInDate;
    private $numberOfNights;   

    public function __construct($name, $checkInDate, $numberOfNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numberOfNights = $numberOfNights;
    }

    public function calculateTotalAmount($roomPricePerNight) {
        return $this->numberOfNights * $roomPricePerNight;
    }
}

$booking = new RoomOrder("John Doe", "2023-07-20", 3);
$roomPricePerNight = 100;
$totalAmount = $booking->calculateTotalAmount($roomPricePerNight);
echo "Total amount to be paid: $" . $totalAmount;

?>
