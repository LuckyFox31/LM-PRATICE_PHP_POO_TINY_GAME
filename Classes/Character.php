<?php

abstract class Character{
    // -- Properties --

    protected Hero|Enemy $_target;


    // -- Magic methods --

    public function __construct(
        protected int $_health,
        protected Weapon $_weapon,
        protected ?Shield $_shield,
    )
    {}

    public function __toString(): string
    {
        return "
            Health: $this->_health
            <br /><br />
        ";
    }

    // -- Methods --

    public function isDie(): string
    {
        return "is dead !";
    }


    // -- Getters --

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->_health;
    }

    /**
     * @return Weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->_weapon;
    }

    /**
     * @return Shield
     */
    public function getShield(): Shield
    {
        return $this->_shield;
    }

    /**
     * @return Enemy|Hero
     */
    public function getTarget(): Hero|Enemy
    {
        return $this->_target;
    }


    // -- Setters --

    /**
     * @param int $health
     * @return Character
     */
    public function setHealth(int $health): self
    {
        $this->_health = $health;
        return $this;
    }

    /**
     * @param Weapon $weapon
     * @return Character
     */
    public function setWeapon(Weapon $weapon): self
    {
        $this->_weapon = $weapon;
        return $this;
    }

    /**
     * @param Shield $shield
     * @return Character
     */
    public function setShield(Shield $shield): self
    {
        $this->_shield = $shield;
        return $this;
    }

    /**
     * @param Enemy|Hero $target
     * @return Character
     */
    public function setTarget(Hero|Enemy $target): self
    {
        $this->_target = $target;
        return $this;
    }
}