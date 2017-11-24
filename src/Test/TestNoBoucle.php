<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 23/11/17
 * Time: 13:36
 */

use Exercise\Exo\NoBoucle;

class TestNoBoucle extends \PHPUnit\Framework\TestCase
{
	public function test1()
	{
		$one = new NoBoucle();
		$this->assertEquals('val2', $one->WriteSecondElem(['val1', 'val2', 'val3']));
	}

	public function test2()
	{
		$one = new NoBoucle();
		$this->assertEquals(['val2', 'val1', 'val5'], $one->writeMoreElem(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9']));
	}

	public function test3()
	{
		$one = new NoBoucle();
		$this->assertEquals('paris', $one->writeElemMultipleArray([['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']]));
	}

	public function test4()
	{
		$one = new NoBoucle();
		$this->assertEquals('la loupe', $one->writeLastEleme(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']));
		$this->assertEquals('val87', $one->writeLastEleme(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val87']));
	}

	public function test5()
	{
		$one = new NoBoucle();
		$this->assertEquals('la loupe', $one->writeEniEmeEleme(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe'], 4));
		$this->assertEquals('val657', $one->writeEniEmeEleme(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val657', 'val8', 'val87'], 33));
	}

	public function test6()
	{
		$one = new NoBoucle();
		$this->assertEquals(5, $one->countElementArray(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']));
		$this->assertEquals(36, $one->countElementArray(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val657', 'val8', 'val87']));
	}
}

