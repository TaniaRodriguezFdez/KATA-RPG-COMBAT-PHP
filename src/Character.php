<?php

namespace App;

use phpDocumentor\Reflection\Types\Boolean;

class Character {

    private int $health;
    private int $level;
    private bool $live;
    private int $damageRecived;
    public function __construct()
    {
        $this->health = 1000;
        $this->level= 1;
        $this->live= true;
        $this->damageRecived= 500;
    }
    public function getHealth()
    {
        return $this->health;
    }
    
    public function getLevel()
    {
        return $this->level;
    }
    public function getLive()
    {
        return $this->live;
    }
    public function getDamageRecived()
    {
        return $this->damageRecived;
    }
}
//◦ Damage is subtracted from Health