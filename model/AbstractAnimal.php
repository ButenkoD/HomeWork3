<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 8:56 PM
 * To change this template use File | Settings | File Templates.
 */

namespace model;

abstract class AbstractAnimal extends AbstractEntity
{
    protected $limb;

    public function setLimb($limb)
    {
        $this->limb = $limb;
    }

    public function getLimb()
    {
        return $this->limb;
    }

    public function move()
    {
        return "Can run and jump";
    }

}