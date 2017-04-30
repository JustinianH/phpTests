<?php

echo '1. What does this output and why?<br><br>';

$str1 = 'yabadabadoo';

$str2 = 'yaba';

if (strpos($str1,$str2)) {

echo $str1 . ' contains '. $str2;

} else {

echo $str1 . ' does not contain '. $str2;

}

echo '<br><br>The else block will be triggered becase \'yaba\' is not an isolated word within the string ($str1). That\'s not how strpos works. For that, you\'d want substr()<br><br>';

echo "<br>------------------------------------------------------------------------------------<br>";

echo '2. Check Palindrome<br><br>';

$testString = "Otto";

function checkPalindrome ($testString) {
    
    $testString = strtolower($testString);
    
    $reverseString = strrev($testString);
    
    if ($testString === $reverseString) {
   	 echo "{$testString} is a Palindrome!";    
    }
    else {
   	 echo "{$testString} is not a Palindrome!";    
    }
    
}


checkPalindrome($testString);

echo "<br>------------------------------------------------------------------------------------<br>";

echo '3. Return Prime Numbers<br><br>';

$testNum = "15";

function returnPrimeNumbers($testNum) {

    for ($i = 0; $i <= $testNum; $i++) {
        if ($i % 2 != 0) {
            echo $i."<br>";
        }
    }
}

returnPrimeNumbers($testNum);

echo "<br>------------------------------------------------------------------------------------<br>";

echo '4. FizzBuzz<br><br>';

function fizzBuzz() {
    for ($i = 1; $i <= 50; $i++) {
        
        if ($i%3 === 0 && $i%5 === 0) {
            echo "{$i} - FizzBuzz <br>";
        }
        else if ($i%3 === 0) {
            echo "{$i} - Fizz <br>";
        }
        else if ($i%5 === 0) {
            echo "{$i} - Buzz <br>";
        }
    }
}

fizzBuzz();

echo "<br>------------------------------------------------------------------------------------<br>";

echo '5. Print Fibonacci<br><br>'; 

$fibLength = 10;

function printFibonacci($fibLength) {


    $sequence = [0, 1, ];

    for ($i=1; $i <= $fibLength; $i++) {
        $sequence[] = $sequence[$i]+$sequence[$i-1];
    }
    for ($i=0; $i <= $fibLength; $i++) {
        echo $sequence[$i].'<br>';
    }
    
}
printFibonacci($fibLength);

echo "<br>------------------------------------------------------------------------------------<br>";

echo '6. Calculate Age<br><br>';

$birthday = new DateTime("1988-12-27"); 

function returnAge($birthday) {
    $today = new DateTime("now");

    $age = $birthday->diff($today);

    echo "You are {$age->y} years, {$age->m} months, and {$age->d} days old";
}

returnAge($birthday);

echo "<br>------------------------------------------------------------------------------------<br>";

echo '7. Find the total of the provided shopping cart<br><br><br>';

$shoppingCart = [

        'items' => [

        ['name' => 'Item 1', 'price' => 20, 'qty' => 1],

        ['name' => 'Item 2', 'price' => 10, 'qty' => 1],

        ['name' => 'Item 3', 'price' => 5, 'qty' => 15]

        ],

        'coupons' => [

        ['code' => 'saveme20', 'discount_type' => 'percentage_off', 'amount' => 20]

        ]

    ];

function getFinalPrice($shoppingCart) {

    $totalPrice = 0;

    for($i=0; $i < count($shoppingCart['items']); $i++) {
        
        $items = $shoppingCart['items'];

        $item = $items[$i];

        $price = $item['price'];

        $quantity = $item['qty'];

        $price = $price * $quantity;

        $totalPrice += $price;
    }

    $discount = $shoppingCart['coupons'];

    $discount = $discount[0];

    $discount = $discount['amount'];

   $discount = ($discount/100);

   $discountAmount = $totalPrice * $discount;

   $finalPrice = $totalPrice - $discountAmount;

   echo "Your final price with your discount applied is: $ {$finalPrice}";
}

getFinalPrice($shoppingCart);


echo "<br>------------------------------------------------------------------------------------<br>";

echo '8. Create a set of classes that describe a car, truck, and plane using polymorphism and inheritance<br><br>';


    class genericVehicle {
        
        var $topSpeed;
        var $color; 
        var $speed; 

        function setTopSpeed($topSpeed) {
            $this->topSpeed = $topSpeed;
        }
        function setType($type) {
            $this->type = $type;
        }
        function setColor($color) {
            $this->color = $color;
        }

        function getTopSpeed() {
            echo $this->topSpeed;
        }
        function getType() {
            echo $this->type;
        }
        function getColor() {
            echo $this->color;
        }
    }

    class car extends genericVehicle {
        var $type = 'car';

        var $doors;
        var $transmission; 

        function setDoors($doors) {
            $this->type = $doors;
        }
        function setTransmission($transmission) {
            $this->color = $transmission;
        }

        function getDoors() {
            echo $this->doors;
        }
        function getTransmission() {
            echo $this->transmission;
        }
    }
    class truck extends genericVehicle {
        var $type = 'truck';

        var $doors;
        var $transmission;

        function setDoors($doors) {
            $this->type = $doors;
        }
        function setTransmission($transmission) {
            $this->color = $transmission;
        }

        function getDoors() {
            echo $this->doors;
        }
        function getTransmission() {
            echo $this->transmission;
        }
    }
    class plane extends genericVehicle {
        var $type = 'plane';
        var $wingspan;

        function setWingspan($wingspan) {
            $this->color = $wingspan;
        }

        function getWingspan() {
            echo $this->wingspan;
        }
    }

$ford = new truck();
$honda = new car();
$sevenFortySeven = new plane();

$ford->getType();
echo '<br>';
$honda->getType();
echo '<br>';
$sevenFortySeven->getType(); 


echo "<br>------------------------------------------------------------------------------------<br>";

echo '9. If you have a three gallon jug and a five gallon jug no marks on either one. The goal is to fill the five gallon jug with four gallons of water. How is this accomplished?<br><br>';

echo 'Ah, the classic Die Hard III problem. Well, as McClane and Zeus figured out, you will need to do the following:<br>';

echo "<ol>

        <li> Fill the five gallon drum completely</li>
        <li> Empty the five gallons into the three gallon drum, leaving two gallons in the five gallon drum</li>
        <li> Discard the three gallons from the three gallon drum</li>
        <li> Pour the remaining two gallons into the three gallon drum</li>
        <li> Fill the five gallon drum completely</li>
        <li> Pour one gallon into the three gallon drum, leaving four gallons</li>


    </ol>
";
echo "<br>------------------------------------------------------------------------------------<br>";

echo '10. Imagine you have eight coins, seven of which weigh the same and one that doesn’t (it’s heavier). Using a pair of scales how would you find the heavier coin?<br><br>';

echo 'This problem would best be solved using a resursive method. Follow this method:<br>';

echo '<ul>
        <li> Divide the coins into two groups of four. Set each group on either side of the scale.</li>
        <li>The scale will tilt one way, indicating which group contains the heavy coin. Remove the four lighter coins. </li>
        <li>Repeat the process; this time placing two coins on either side. Remove the lighter two coins </li>
        <li>Weigh the final two coins. The heavier one will tilt the scale. </li>
    </ul>
';

?>