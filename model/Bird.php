<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 9:44 PM
 * To change this template use File | Settings | File Templates.
 */

namespace model;

abstract class Bird extends Entity
{
    protected $wing;

    public function setWing($wing)
    {
        $this->wing = $wing;
    }

    public function getWing()
    {
        return "has " . $this->wing . "wings";
    }

    public function fly()
    {
        return "I can fly!!";
    }
}