<?php
include 'person.php';
class Student extends Person{ //will b mad until include getPersonInfo function cuz its req
    public $studentID;
    public function __construct($firstArg, $lastArg, $studentID){ //borrow wat we want from our abstract class
        parent::__construct($firstArg, $lastArg);
        
    }

    public function getPersonInfo(){
        return $this->first . ' ' . $this->last . ' ' . $this->studentID;
      }
}
