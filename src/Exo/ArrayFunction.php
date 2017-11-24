<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 24/11/17
 * Time: 08:27
 */

namespace Exercise\Exo;

/**
 * Class ArrayFunction
 * @package Exercise\Exo
 */
class ArrayFunction
{
	/**
	 *
	 * Modifier la fonction afin que cette dernière renvoie le nombre d'élément du tableau (voir exemple)
	 * Ex:
	 * $array = [
	 *     'paris',
	 *     'orléans',
	 *     'toulouse',
	 *     'bordeaux',
	 *     'la loupe'
	 * ];
	 *
	 * La fonction devra retourner 5
	 *
	 * Hint: Le tableau passé en paramètre contiendra un nombre d'élément variable
	 *
	 * @param $array
	 *
	 * @return array
	 *
	 */
	public function countElementArray($array){
		return count($array);
	}
}