<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 23/11/17
 * Time: 13:36
 */

use Exercise\Exo\ArrayFunction;

class TestArrayFunction extends \PHPUnit\Framework\TestCase
{
	public function test1()
	{
		$one = new ArrayFunction();
		$this->assertEquals(5, $one->countElementArray(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']));
		$this->assertEquals(36, $one->countElementArray(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val657', 'val8', 'val87']));
	}
}

