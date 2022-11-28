<?php

// Traits
require_once('./Traits/AttackTrait.php');


// Interface
require_once('./Interfaces/AttackInterface.php');


// Classes
require_once('./Classes/Character.php');
require_once('./Classes/Shield.php');
require_once('./Classes/Hero.php');
require_once('./Classes/Enemy.php');

require_once('./Classes/Weapon.php');
require_once('./Classes/Shield.php');

require_once('./Classes/Weapons/Stick.php');
require_once('./Classes/Weapons/Gun.php');
require_once('./Classes/Weapons/LightSaber.php');

require_once('./Classes/Shields/Cardboard.php');
require_once('./Classes/Shields/Leather.php');
require_once('./Classes/Shields/Iron.php');

$heroHealth = 100;
$heroWeapon = new Stick();
$heroShield = new Leather();

$enemyHealth = 100;
$enenyWeapon = new Stick();
$enemyShield = null;

$hero = new Hero($heroHealth, $heroWeapon, $heroShield);
$orc = new Enemy($enemyHealth, $enenyWeapon, $enemyShield);

$hero->setTarget($orc);
$orc->setTarget($hero);

while ($hero->getHealth() > 0 && $orc->getHealth() > 0){
    $orc->attack();
    echo $hero;
    echo $orc;
}