<?php
    class Variable {
        public $name = "Chaiden";
        public $birthdate = "2005-04-26";
        public $sex = "Male";
        public $GPA = 4.00;
        public $isStudent = true;
        public $age; 

        public function __construct() {
            $ageDiff = (new DateTime())->diff(new DateTime($this->birthdate));
            $this->age = "{$ageDiff->y} tahun, {$ageDiff->m} bulan, {$ageDiff->d} hari";
        }
    }

    $variable = new Variable();
    echo "Umur Chaiden : " . $variable->age;
?>
