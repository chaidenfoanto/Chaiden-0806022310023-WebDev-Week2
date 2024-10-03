<?php
    require_once 'variables.php';

    class Students extends Variable {
        public function __construct($name, $birthdate, $sex, $GPA, $isStudent) {
            parent::__construct();
            $this->name = $name;
            $this->birthdate = $birthdate;
            $this->sex = $sex;
            $this->GPA = $GPA;
            $this->isStudent = $isStudent;
        }
    }

    $student1 = new Students("William", "2005-05-15", "Male", 3.5, true);
    $student2 = new Students("Putri", "2008-08-21", "Female", 3.8, true);
    $student3 = new Students("Dono", "2003-12-11", "Male", 3.2, true);
    $student4 = new Students("Kellyn", "2007-03-30", "Female", 3.9, true);
    $student5 = new Students("Word", "2002-06-05", "Male", 3.6, true);

    $namaStudent = [];

    $namaStudent[] = $student1->name;
    $namaStudent[] = $student2->name;
    $namaStudent[] = $student3->name;
    $namaStudent[] = $student4->name;
    $namaStudent[] = $student5->name;

    function greet($name) {
        return "<br>Hello, $name!";
    }

    foreach ($namaStudent as $nama) {
        echo greet($nama);
    }
?>
