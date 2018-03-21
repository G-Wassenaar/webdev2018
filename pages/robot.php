<?php

include 'weapon.php';

class Robot {

    private $_batteryPower;
    private $_weapon;

    public function __construct(int $batteryPower){
        $this->_weapon = new Weapon();
        $this->_batteryPower = $batteryPower;
    }

    public function maakZichtbaar(){
        return "dit is een robot met ".$this->_batteryPower." batterij inhoud";
    }

    public function fight(Robot $opponent){
        $endVal1=$this->_batteryPower-$opponent->_batteryPower;
        $endVal2=$opponent->_batteryPower-$this->_batteryPower;

        $this->_batteryPower=$endVal1;
        $opponent->_batteryPower=$endVal2;

        if($this->_batteryPower<=0) {
            echo '<br>Ik ben dood en de andere robot heeft nog '.$opponent->_batteryPower.' batterij niveau';
        } else {
            echo '<br>De andere robot is dood en ik heb nog '.$this->_batteryPower.' batterij niveau';
        }
    }

    public function fight2(Robot $opponent){


        $endVal1=$this->_batteryPower-$opponent->_batteryPower;
        $endVal2=$opponent->_batteryPower-$this->_batteryPower;

        $this->_batteryPower=$endVal1;
        $opponent->_batteryPower=$endVal2;

        if($this->_batteryPower< $opponent->_batteryPower) {
            echo '<br>Ik ben dood en de andere robot heeft nog '.$opponent->_batteryPower.' batterij niveau';
        } else {
            echo '<br>De andere robot is dood en ik heb nog '.$this->_batteryPower.' batterij niveau';
        }
    }


}


?>