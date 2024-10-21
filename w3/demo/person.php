<?php

abstract class Person {

    protected $first; //protected accessible within child class
    protected $last;

    //protected $ID;

    //  private static $objectCount = 0; //anytime construct person keeps count



    public function __construct($firstArg, $lastArg){
        $this->first=$firstArg;
        $this->last=$lastArg;
        //$this->ID=self::$objectCount; //constructor handle id itself
        //self::$objectCount++;
    }

    public function setFirst($firstArg): void{
        $this->first=$firstArg;
    }

    public function getFirst(){
        return $this->first;
    }

    public function setLast($firstArg): void{
        $this->first=$firstArg;
    }

    public function getLast(){
        return $this->last;
    }

    public function getFullName(){
        return $this->first . $this->last;
    }

    abstract function getPersonInfo(); //this function req

}