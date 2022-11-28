<?php

trait AttackTrait{
    public function attack()
    {
        $this->_target->isAttacked($this->_weapon->getDamage());
    }
}