<?php 

    require __DIR__ . '/calValue_check.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
    }

    $cal = new CalValue();
    $cal -> cal_value($number1,$number2);


    if($number1 > $number2) {
        echo "Number 1 should be larger than number 2";
    } else {
        
    }

?>