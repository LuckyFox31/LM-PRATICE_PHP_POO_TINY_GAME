<?php

class Enemy extends Character implements AttackInterface {
    // -- Traits --

    use AttackTrait;


    // -- Magic Methods --

    public function __construct(
        int $_health,
        Weapon $_weapon,
        ?Shield $_shield,
    )
    {
        parent::__construct($_health, $_weapon, $_shield);
    }

    public function __toString(): string
    {
        return "
            -- Enemy data -- <br /></br />
        ".parent::__toString();
    }

    public function isDie(): string
    {
        return "Enemy ".parent::isDie()."<br /><br />";
    }


    // -- Methods --

    public function isAttacked(int $damage)
    {
        $damageReceive = $damage - ($this->_shield ? $this->_shield->getValue() : 0);
        $this->_health = max($this->_health -= max($damageReceive, 0), 0);
        if($this->_health == 0){
            echo $this->isDie();
        }
    }
}