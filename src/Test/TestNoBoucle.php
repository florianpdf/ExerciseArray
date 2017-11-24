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
    private $noBoucle;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->noBoucle = new NoBoucle();
    }

    public function test1()
    {
        $this->assertEquals('val2', $this->noBoucle->WriteSecondElem(['val1', 'val2', 'val3']));
    }

    public function test2()
    {
        $this->assertEquals(['val2', 'val1', 'val5'], $this->noBoucle->writeMoreElem(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9']));
    }

    public function test3()
    {
        $this->assertEquals('paris', $this->noBoucle->writeElemMultipleArray([['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']]));
    }

    public function test4()
    {
        $this->assertEquals('la loupe', $this->noBoucle->writeLastEleme(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']));
        $this->assertEquals('val87', $this->noBoucle->writeLastEleme(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val87']));
    }

    public function test5()
    {
        $this->assertEquals('la loupe', $this->noBoucle->writeEniEmeEleme(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe'], 4));
        $this->assertEquals('val657', $this->noBoucle->writeEniEmeEleme(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val657', 'val8', 'val87'], 33));
    }
}

