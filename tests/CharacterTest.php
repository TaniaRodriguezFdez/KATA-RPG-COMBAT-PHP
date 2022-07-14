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
			$gokuLive = $goku->getLive();
			$pikachuLive = $pikachu->getLive();
			//then
			$this->assertEquals(true,$gokuLive);
			$this->assertEquals(true,$pikachuLive);
	}
	public function test_damage_recived()
	{
			//given
			$goku = new Character;
			//when
			$gokuDamageRecived = $goku->getDamageRecived();
			//then
			$this->assertEquals(true,$gokuDamageRecived);
	}

}


