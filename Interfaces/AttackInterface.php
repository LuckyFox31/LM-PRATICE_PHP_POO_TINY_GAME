<?php

interface AttackInterface{
    public function isAttacked(int $damage);
    public function attack();
}