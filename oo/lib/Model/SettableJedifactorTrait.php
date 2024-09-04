<?php

namespace Model;

trait SettableJedifactorTrait
{
    private $jediFactor = 0;

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}