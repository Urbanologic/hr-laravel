<?php

use app\Models\Employee;

class Test {

public string $test = "Working";

    public function showTest() {
        echo $this->test;
       $employees = Employee::with(['country', 'department'])->get();

    }


}

 $testInstance = new Test();

 $testInstance->showTest();

