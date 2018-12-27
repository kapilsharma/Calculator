<?PHP
include('vendor/autoload.php');

use \EE\OperationFactory;

// Get command line arguments.
$fileName = array_shift($argv);
$operation = array_shift($argv);
$numbers = array_shift($argv);

// Validate command line arguments.
if (empty($operation)) {
    echo "Operation not defined. Usage: php calculator.php operation numbers";
    exit();
}
if (empty($numbers)) {
    echo "Numbers not defined. Usage: php calculator.php operation numbers";
    exit();
}

// Make number array of numbers string
$numberArray = explode(',', $numbers);

// Execute operation
try {
    /**
     * @var \EE\operations\OperationInterface
     */
    $operation = OperationFactory::getOperation($operation);

    $result = $operation->execute($numberArray);

    echo 'Result is ' . $result;
} catch(\EE\Exceptions\OperationNotFoundException $exception) {
    echo $exception->getMessage();
}
