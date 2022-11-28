<?php

class Weapon{
    // -- Properties --
    protected int $_damage;
    protected int $_precision;


    // -- Getters --

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->_damage;
    }

    /**
     * @return int
     */
    public function getPrecision(): int
    {
        return $this->_precision;
    }
}