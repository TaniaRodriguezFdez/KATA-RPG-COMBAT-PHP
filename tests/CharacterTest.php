<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_health_starting_at_1000_points()
	{
		//given
		$goku = new Character;
		$pikachu = new Character;
		//when
		$gokuHealth = $goku->getHealth();
		$pikachuHealth = $pikachu->getHealth(1000);
		//then
		$this->assertEquals(1000,$gokuHealth);
		$this->assertEquals(1000,$pikachuHealth);
	}


	public function test_character_level_starting_at_one()
	{
			//given
			$goku = new Character;
			$pikachu = new Character;
			//when
			$gokuLevel = $goku->getLevel();
			$pikachuLevel = $pikachu->getLevel();
			//then
			$this->assertEquals(1,$gokuLevel);
			$this->assertEquals(1,$pikachuLevel);
	}

	public function test_character_is_alive_or_dead()
	{
			//given
			$goku = new Character;
			$pikachu = new Character;
			//when
			$gokuLive = $goku->isAlive();
			$pikachuLive = $pikachu->isAlive();
			//then
			$this->assertEquals(true,$gokuLive);
			$this->assertEquals(true,$pikachuLive);
	}
	public function test_Character_takes_damage()
	{
			//given
			$merida = new Character;
			$harley= new Character;
			//when
			$merida->attack($harley,200);
			$result = $harley->getHealth();
			$this->assertEquals(800, $result);
	}
	public function test_when_character_health_equals_0_he_died()
	{
		$merida = new Character;
		$harley= new Character;

		$merida->attack($harley,1000);
		$result = $harley->getHealth();
		$this->assertEquals(0,$result);
		$this->assertEquals(false,$harley->isAlive());
		
	}

	public function test_character_can_heal_another_character()
	{
		$merida = new Character;
		$harley= new Character;
        $harley->setHealth(800);
		
		$merida->heal($harley,200);
		$this->assertEquals(1000,$harley->getHealth());
		
	}
	public function test_character_dead_cant_be_healed()
	{
		$merida = new Character;
		$harley= new Character;
        $harley->setHealth(0);
		
		$merida->heal($harley,200);
		$this->assertEquals(false,$harley->isAlive());
		$this->assertEquals(0,$harley->getHealth());
		$this->assertEquals(false,$harley->isAlive());
	}

}


