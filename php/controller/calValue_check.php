<?php 
    class CalValue{
        public function cal_value($number1, $number2) {
            echo 'working';
            echo'<br>';

            for($number1; $number1 <= $number2; $number1++) {
                echo "Number ", $number1;
                echo "<br>";
            }
        }

        public function test($number1, $number2) {
            
        }
    }
?>