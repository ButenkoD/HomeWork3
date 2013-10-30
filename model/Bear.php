<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 10:07 PM
 * To change this template use File | Settings | File Templates.
 */

namespace model;

class Bear extends AbstractAnimal implements PredatorInterface, HerbivorousInterface
{
    public function hunt()
    {
        //
    }

    public function feed()
    {
        //
    }

    public function runAway()
    {
        //
    }

    public function move()
    {
        return "I can just walk";
    }
}