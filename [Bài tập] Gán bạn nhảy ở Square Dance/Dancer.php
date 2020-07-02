<?php

class Dancer
{
    protected $name;
    protected $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

}

$queue1 = new SplQueue();
$queue2 = new SplQueue();

$dancer1 = new Dancer("Luc", "Male");
$dancer2 = new Dancer("Duong", "Male");
$dancer3 = new Dancer("Tung", "Male");
$dancer4 = new Dancer("Viet Anh", "Male");

$dancer5 = new Dancer("Duyen", "Female");
$dancer6 = new Dancer("Thuy", "Female");
$dancer7 = new Dancer("Trang", "Female");

$queue1->push($dancer1);
$queue1->push($dancer2);
$queue1->push($dancer3);
$queue1->push($dancer4);

echo "<pre>";
print_r($queue1);
echo "</pre>";
echo "<br>";

$queue2->push($dancer5);
$queue2->push($dancer6);
$queue2->push($dancer7);

echo "<pre>";
print_r($queue2);
echo "</pre>";
echo "<br>";

function pairing($queue1, $queue2)
{
    $list = array();
    if ($queue1 !== NULL && $queue2 !== NULL) {
        $a = $queue1->shift();
        $b = $queue2->shift();
        array_push($list, $a);
        array_push($list, $b);
    } else {
        return "Khong co cap doi";
    }
    return $list;
}

function queue($queue1, $queue2)
{
    if ($queue1->count() > $queue2->count()) {
        return $queue1->count();
    } else {
        return $queue2->count();
    }
}

echo "<pre>";
var_dump(pairing($queue1, $queue2));
echo "</pre>";
echo "<pre>";
var_dump(pairing($queue1, $queue2));
echo "</pre>";
echo "<pre>";
var_dump(pairing($queue1, $queue2));
echo "</pre>";
echo "<pre>";
var_dump(pairing($queue1, $queue2));
echo "</pre>";


print_r(queue($queue1,$queue2));
