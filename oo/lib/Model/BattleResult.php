<?php

namespace Model;

class BattleResult implements \ArrayAccess
{
    private $winningShip;
    private $losingShip;
    private $usedJediPowers;

    /**
     * @param AbstraShip $winningShip
     * @param AbstraShip $losingShip
     * @param boolean $usedJediPowers
     */
    public function __construct(AbstraShip $winningShip = null, AbstraShip $losingShip = null, $usedJediPowers)
    {
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }
    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }
    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @return boolean
     */
    public function isThereAWinner()
    {
        return $this->winningShip !== null;
    }

    public function offsetExists(mixed $offset): bool
    {
        return property_exists($this, $offset);
    }
    public function offsetGet(mixed $offset): mixed
    {
        return $this->$offset;
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->$offset = $value;
    }
    public function offsetUnset(mixed $offset): void
    {
        unset($this->$offset);
    }
}