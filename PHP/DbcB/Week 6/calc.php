<?php
    class tu_calc {
        function __construct($x, $y){
            $this->x=$x;
            $this->y=$y;
        }
        
        public function add() {
            return $this->x+$this->y;
        }
        
        public function multiply() {
            return $this->x*$this->y;
        } 
    }

$calc = new tu_calc(5,2); 
echo $calc->add();
echo "<br>";
echo $calc->multiply(); 
?>
    