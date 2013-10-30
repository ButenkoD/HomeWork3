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

function invokeModel($animal_kind)
{
}

function createCat()
    {
        $cat = new Cat();
        $cat->setColor('black');
        $cat->setWeight(5);
        $cat->setLimb(4);
        return $cat;
    }

function createBear()
    {
        $bear = new Bear();
        $bear->setColor('brown');
        $bear->setWeight(100);
        $bear->setLimb(4);
        return $bear;
    }

function createEagle()
    {
        $eagle = new Eagle();
        $eagle->setColor('gold');
        $eagle->setWeight(5);
        $eagle->setWing(2);
        return $eagle;
    }

function createDove()
    {
        $dove = new Dove();
        $dove->setColor('grey');
        $dove->setWeight(1);
        $dove->setWing(2);
        return $dove;
    }