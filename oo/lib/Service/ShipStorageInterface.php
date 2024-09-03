<?php

interface ShipStorageInterface{

    /**
    * @return array
    */
    public function fetchAllShipsData();

    /**
     * 
     * @param integer $id
     * @return array()
     */
    public function fetchSingleShipData($id);
}