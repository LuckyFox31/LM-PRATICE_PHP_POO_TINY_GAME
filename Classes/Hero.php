<?php

class Hero extends Character implements AttackInterface {
    // -- Traits --

    use AttackTrait;


    // -- Properties --

    private int $_rage = 0;


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
            -- Hero data -- <br /></br />
        ".parent::__toString();
    }


    // -- Methods --

    public function isAttacked($damage){
        $damageReceive = $damage - ($this->_shield ? $this->_shield->getValue() : 0);
        $this->_health = max($this->_health -= max($damageReceive, 0), 0);
        if($this->_health == 0){
            echo $this->isDie();
        } else {
            $this->increaseRage();
        }
    }

    private function increaseRage(){
        $this->_rage += 30;
        if($this->_rage >= 100){
            $this->_rage = 0;
            $this->attack();
        }
    }

    public function isDie(): string
    {
        return "Hero ".parent::isDie()."<br /><br />";
    }


    // -- Getters --

    /**
     * @return int
     */
    public function getRage(): int
    {
        return $this->_rage;
    }


    // -- Setters --

    /**
     * @param int $rage
     * @return Hero
     */
    public function setRage(int $rage): self
    {
        $this->_rage = $rage;
        return $this;
    }
}