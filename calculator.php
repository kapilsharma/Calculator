<?PHP
$fileName = array_shift($argv);
$operation = array_shift($argv);
$numbers = array_shift($argv);

if (empty($operation)) {
    echo "Operation not defined. Usage: php calculator.php operation numbers";
    exit();
}

if (empty($numbers)) {
    echo "Numbers not defined. Usage: php calculator.php operation numbers";
    exit();
}

$numberArray = explode(',', $numbers);

foreach($numberArray as $number) {
    if (!is_numeric($number)) {
        echo "Numbers must be numeric.";
        exit;
    }
}

if ($operation == "add") {
    echo 'Sum of ' . $numbers . ' is ' . array_sum($numberArray) . PHP_EOL;
    echo "Sum of $numbers is " . array_sum($numberArray);
}