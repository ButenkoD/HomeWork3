<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/29/13
 * Time: 9:17 PM
 * To change this template use File | Settings | File Templates.
 */

namespace model;

use model\Cat;
use model\Bear;
use model\Eagle;
use model\Dove;
use controller\Controller;

class Model
{
    public function invokeModel($animal_kind)
    {
        Controller::$correct_uri = true;
        switch ($animal_kind)
        {
            case "cat":
                return $this->createCat();
                break;

            case "bear":
                return $this->createBear();
                break;

            case "eagle":
                return $this->createEagle();
                break;

            case "dove":
                return $this->createDove();
                break;

            default:
                Controller::$correct_uri = false;
        }
    }

    private function createCat()
    {
        $cat = new Cat();
        $cat->setColor('black');
        $cat->setWeight(5);
        $cat->setLimb(4);
        return $cat;
    }

    private function createBear()
    {
        $bear = new Bear();
        $bear->setColor('brown');
        $bear->setWeight(100);
        $bear->setLimb(4);
        return $bear;
    }

    private function createEagle()
    {
        $eagle = new Eagle();
        $eagle->setColor('gold');
        $eagle->setWeight(5);
        $eagle->setWing(2);
        return $eagle;
    }

    private function createDove()
    {
        $dove = new Dove();
        $dove->setColor('grey');
        $dove->setWeight(1);
        $dove->setWing(2);
        return $dove;
    }

}
