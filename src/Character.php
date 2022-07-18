<?php

namespace App;

use phpDocumentor\Reflection\Types\Boolean;

class Character {
    private int $health;
    private int $level;
    private bool $live;
    private int $damage;
    public function __construct()
    {
        $this->health = 1000;
        $this->level= 1;
        $this->live= true;

        $this->damage= 500;
    }


    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        $this->health = $health;
        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function isAlive()
    {
        if ($this->health <= 0) {
            $this->live=false;
            return $this->live;
        }
        return $this->live;
    }

    public function attack($enemy,$attackPoints)
    {
        $enemy->health = $enemy->health - $attackPoints;
    }
    
    public function heal($friend,$healPoints)
    {
       $friend->health = $friend->health + $healPoints;
    }

    public function cantBeHealed()
    {
        if ($this->health <= 0) {
            $this->live=false;
            return $this->live;
        }
        return $this->live;
    }

   
}