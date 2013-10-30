<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 9:44 PM
 * To change this template use File | Settings | File Templates.
 */

namespace model;

abstract class AbstractBird extends AbstractEntity
{
    protected $wing;

    public function setWing($wing)
    {
        $this->wing = $wing;
    }

    public function getWing()
    {
        return $this->wing;
    }

    public function fly()
    {
        return "Can fly!!";
    }
}