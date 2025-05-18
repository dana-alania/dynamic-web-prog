<?php
    $num = readline("Enter a number: ");
    if ($num % 2 == 0) {
        echo "$num is Even\n";
    } else {
        echo "$num is Odd\n";
    }

    $num = readline("Enter a number: ");
    $result = "Even";
    if ($num % 2 == 0) {
        $result = "Odd";
    }
    echo "The number is $result\n";

    function isPrime($number) {
        if ($number < 2) {
            return "$number is not prime\n";
        }

        if ($number == 2) {
            return "$number is prime \n";
        }

        if ($number % 2 == 0) {
            return "$number is not prime\n";
        }
        
        $sqrtNumber = sqrt($number);
        for($i = 3; $i <= $sqrtNumber; $i += 2) {
            if ($number % $i === 0) {
                echo "$number is not prime\n";
            }
        }
        
        return "$number is prime\n";
    }

    $number = readline("Enter a number: ");
    if (!is_numeric($number)) {
        echo "Invalid input. Please enter a number.\n";
        exit;
    }

    $number = (int)$number;
    for ($ctr = 0; $ctr <= $number; $ctr++) {
        echo isPrime($ctr);
    }

require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;
use Ramsey\Uuid\Uuid;
use demi\timelog\TimeLog;

$slugify = new Slugify();
echo $slugify->slugify("This is the new sample text.");

$uuid = Uuid::uuid4();
echo $uuid->toString()."\n";

$faker = Faker\Factory::create();
echo $faker->name()."\n";
echo $faker->email()."\n";
echo $faker->text()."\n";

?>