<?php

include 'robot.php';

/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 10/03/2018
 * Time: 10:03
 */

 abstract class PageBuilder{

     public $id = 0;

     static function showTitle(){
         echo "Title";
     }

     static function showNav(){
         echo "Navigation";
     }

     static function showMain(){
         echo "Main<br>";
         $superRobot= new Robot(5);
         echo $superRobot->maakZichtbaar();
         echo '<br>';
         $ultraRobot= new Robot(10);
         echo $ultraRobot->maakZichtbaar();

         $ultraRobot->fight($superRobot);

     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "&copy; Geert Van Gent";
        }





 };



?>