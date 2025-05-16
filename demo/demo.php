<?php

$num = readline("Enter a number: ");
if($num % 2 == 0){
    echo $num . " is even\n";
} else {
    echo $num . " is odd\n";
}

$num = readline("Enter a number: ");
$result = "Even";
if ($num % 2 != 0) {
    $result = "Odd";
}

echo "The number is: {$result} ";

$num = readline("Enter a number: ") % 2 != 0 ? "Odd":"Even";
echo "The number is: {$num} ";


function isPrimeNumber($ctr){
    if($ctr < 2){
        return "{$ctr} is not prime\n";
    }

    if($ctr == 2) {
        return "{$ctr} is prime\n";
    }

    $sqrtNumber = sqrt($ctr);
    for($i=3; $i <= $sqrtNumber; $i += 2){
        if($ctr % $i === 0){
            return "{$ctr} is not prime\n";
           
        }
    }
    return "{$ctr} is prime\n";
}


$number = readline("Enter a number: ");
if (!is_numeric($number)) {
    echo "Invalid input";
    exit;
} 

$number = (int)$number;
for($ctr = 0 ; $ctr <= $number; $ctr++) {
   echo isPrimeNumber($ctr);
    
}


require __DIR__ . '/../vendor/autoload.php';
use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use demi\timelog\TimeLog;

$slugify = new Slugify();
echo $slugify->slugify("This is the new sample text.")."\n";

$uuid = Uuid::uuid4();
echo $uuid->toString()."\n";

$faker = Faker\Factory::create();
echo $faker->name."\n";
echo $faker->email."\n";
echo $faker->text;