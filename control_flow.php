<?php
    require_once 'variables.php';

    class controlFlow {
        private $variables;

        public function __construct() {
            $this->variables = new Variable();
        }

        // public function cekUmur() {
        //     $ageYears = (new DateTime())->diff(new DateTime($this->variables->birthdate))->y;
            
        //     return $ageYears >= 18 ? "<br>You are an adult.<br>" : "<br>You are a minor.<br>";
        // }

        public function cekUmur() {
            $now = new DateTime();
            $born = new DateTime($this->variables->birthdate);
            $legality = $now->diff($born);

            if ($legality->y >= 18) {
                return "<br>You are an adult.<br>";
            } else {
                return "<br>You are a minor.<br>";
            }
        }
    }

    $control = new controlFlow();
    echo $control->cekUmur();
?>
