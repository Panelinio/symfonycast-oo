<?php

class BattleResult
{
    private $winningShip;
    private $losingShip;
    private $usedJediPowers;

    public function __construct(Ship $winningShip = null, Ship $losingShip = null, $usedJediPowers)
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
}