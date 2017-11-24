<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 23/11/17
 * Time: 13:36
 */

use Exercise\Exo\ArrayFunction;

/**
 * Class TestArrayFunction
 */
class TestArrayFunction extends \PHPUnit\Framework\TestCase
{
	/**
	 * @var ArrayFunction
	 */
    private $arrayFunction;

	/**
	 * TestArrayFunction constructor.
	 * @param null $name
	 * @param array $data
	 * @param string $dataName
	 */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->arrayFunction = new ArrayFunction();
    }


    public function testCountElementArray()
    {
        $this->assertEquals(5, $this->arrayFunction->countElementArray(['paris', 'orléans', 'toulouse', 'bordeaux', 'la loupe']));
        $this->assertEquals(36, $this->arrayFunction->countElementArray(['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val657', 'val8', 'val87']));
    }

    public function testChangeCase()
    {
        $this->assertEquals(
            ['PARIS' => 30, 'ORLEANS' => 22, 'TOULOUSE' => 16, 'BORDEAUX' => 19, 'LA LOUPE' => 12],
            $this->arrayFunction->changeCase(['paris' => 30, 'orleans' => 22, 'toulouse' => 16, 'bordeaux' => 19, 'la loupe' => 12])
        );
    }

    public function testReturnColumn()
    {
        $array = array(
	        array(
		        'id' => 2135,
		        'first_name' => 'John',
		        'last_name' => 'Doe',
	        ),
	        array(
		        'id' => 3245,
		        'first_name' => 'Sally',
		        'last_name' => 'Smith',
	        ),
	        array(
		        'id' => 5342,
		        'first_name' => 'Jane',
		        'last_name' => 'Jones',
	        ),
	        array(
		        'id' => 5623,
		        'first_name' => 'Peter',
		        'last_name' => 'Doe',
	        )
        );
        $column = 'first_name';
        $return =
	        array(
		        'John',
		        'Sally',
		        'Jane',
		        'Peter'
	        );

        $this->assertEquals($return, $this->arrayFunction->returnColumn($array, $column));
    }

    public function testFlipKeyValue()
    {
        $array = ['florian' => 29, 'alexis' => 28, 'marinne' => 27];
        $result = [29 => 'florian', 28 => 'alexis', 27 => 'marinne'];
        $this->assertEquals($result, $this->arrayFunction->flipKeyValue($array));
    }

    public function testMyArrayCombine()
    {
        $key = ['formateur', 'campus manager', 'ecole'];
        $value = ['florian', 'marinne', 'paris'];
        $result = ['formateur' => 'florian', 'campus manager' => 'marinne', 'ecole' => 'paris'];
        $this->assertEquals($result, $this->arrayFunction->myArrayCombine($key, $value));
    }

    public function testCheckKey()
    {
        $result = ['formateur' => 'florian', 'campus manager' => 'marinne', 'ecole' => 'paris'];
        $this->assertEquals(true, $this->arrayFunction->checkKey('formateur', $result));
        $this->assertEquals(false, $this->arrayFunction->checkKey('eleve', $result));
    }

    public function testMergeArray()
    {
        $arrayOne = ['val1', 'val2', 'val3'];
        $arrayTwo = ['val4', 'val5', 'val6'];
        $arrayTree = ['val7', 'val8', 'val9'];
        $result = ['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9'];
        $this->assertEquals($result, $this->arrayFunction->mergeArray($arrayOne, $arrayTwo, $arrayTree));
    }

    public function testSumArray()
    {
        $this->assertEquals(36, $this->arrayFunction->sumArray([1, 3, 4, 9, 7, 7, 5]));
    }

    public function testSortArray()
    {
        $array = [0, 9, 6, 5, 4, 6, 1, 1, 9, 567, 7];
        $this->assertEquals([0, 1, 1, 4, 5, 6, 6, 7, 9, 9, 567], $this->arrayFunction->sortArray($array));
    }

    public function testIfInArray()
    {
        $array = [
	        'formateur' => 'florian',
	        'campus manager' => 'marinne',
	        'ecole' => 'paris'
        ];
        $this->assertEquals(true, $this->arrayFunction->checkIfInArray('florian', $array));
        $this->assertEquals(false, $this->arrayFunction->checkIfInArray('alexis', $array));
    }
}