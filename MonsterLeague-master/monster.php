<?php
class Monster{
    private $name = 'Default';
    private $strength;
    private $life;
    private $type;
    
    function __construct($nameM, $strengthM, $lifeM, $typeM){
        $this->name = $nameP;
        $this->strength = $strengthP;
        $this->life = $lifeP;
        $this->type = $typeP;
    }

    function setName($value){
        $this->name = $value;
    }
    function getName(){
        return $this->name;
    }

    function setStrength($value){
        $this->strength = $value;
    }
    function getStrength(){
        return $this->strength;
    }

    function setLife($value){
        $this->life = $value;
    }
    function getLife(){
        return $this->life;
    }

    function setType($value){
        $this->type = $value;
    }
    function getType(){
        return $this->type;
    }

}

?>