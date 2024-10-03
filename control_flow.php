<?php
    require_once 'variables.php';

    class controlFlow {
        private $variables;

        public function __construct() {
            $this->variables = new Variable();
        }

        public function cekUmur() {
            $ageYears = (new DateTime())->diff(new DateTime($this->variables->birthdate))->y;
            
            return $ageYears >= 18 ? "<br>You are an adult.<br>" : "<br>You are a minor.<br>";
        }
    }

    $control = new controlFlow();
    echo $control->cekUmur();
?>
