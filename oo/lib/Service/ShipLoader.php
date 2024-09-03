<?php

namespace Service;

use Model\AbstraShip;
use Model\RebelShip;
use Model\Ship;

class ShipLoader
{
    private $shipStorage;
    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return AbstraShip[]
     */
    public function getShips()
    {
        $shipsData = $this->shipStorage->fetchAllShipsData();
        //var_dump($shipsData);die;

        $ships = array();
        foreach ($shipsData as $shipData) {
            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    /**
     * @param $id
     * @return AbstraShip
     */

    public function findOneById($id)
    {
        $shipArray = $this->shipStorage->fetchSingleShipData($id);

        //var_dump($shipArray);die;
        return $this->createShipFromData($shipArray);
    }

    private function createShipFromData(array $shipData)
    {
        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setStrength($shipData['strength']);
        return $ship;
    }
}