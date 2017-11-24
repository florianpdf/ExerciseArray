<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 23/11/17
 * Time: 13:33
 */

namespace Exercise\Exo;

/**
 * Les exercices ci dessous doivent être réalisé sans boucle
 *
 * @package Exercise
 */
class NoBoucle
{
    /**
     * Modifier la fonction afin que cette dernière renvoie le deuxième élément du tableau
     * Ex:
     * $array = ['val1', 'val2', 'val3'];
     * La fonction devra retourner 'val2'
     *
     * Hint: Le tableau passé en paramètre contiendra 3 éléments
     *
     * @param $array
     *
     * @return string
     */
    public function writeSecondElem($array)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie sous forme de tableau le 2ème, 1er, et 5ème élément du tableau
     * Ex:
     * $array = ['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9'];
     * La fonction devra retourner ['val2', 'val1', 'val5']
     *
     * Hint: Le tableau passé en paramètre contiendra 9 éléments
     *
     * @param $array
     *
     * @return array
     */
    public function writeMoreElem($array)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie le premier élément du premier tableau enfant (voir exemple)
     * Ex:
     * $array = [
     *      [
     *          'paris',
     *          'orléans',
     *          'toulouse',
     *          'bordeaux',
     *          'la loupe'
     *      ],
     *      [
     *          'marseille',
     *          'nice',
     *          'fontainebleau',
     *          'nantes',
     *          'lille'
     *      ],
     * ];
     *
     * La fonction devra retourner 'paris'
     *
     * Hint: Le tableau passé en paramètre contiendra 2 éléments de type array, qui contiendront eux même 5 éléments
     *
     * @param $array
     *
     * @return array
     */
    public function writeElemMultipleArray($array)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie le dernier élément du tableau (voir exemple)
     * Ex:
     * $array = [
     *     'paris',
     *     'orléans',
     *     'toulouse',
     *     'bordeaux',
     *     'la loupe'
     * ];
     *
     * La fonction devra retourner 'la loupe'
     *
     * Hint: Le tableau passé en paramètre contiendra un nombre d'élément variable
     *
     * @param $array
     *
     * @return array
     */
    public function writeLastEleme($array)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie lélément $n du tableau (voir exemple)
     * Ex:
     * $array = [
     *     'paris',
     *     'orléans',
     *     'toulouse',
     *     'bordeaux',
     *     'la loupe'
     * ];
     *
     * $n = 1
     * La fonction devra retourner 'orléans'
     *
     * $n = 3
     * La fonction devra retourner 'orléans'
     *
     * Hint: Le tableau passé en paramètre contiendra un nombre d'élément variable
     *
     * @param $array
     *
     * @return array
     */
    public function writeEniEmeEleme($array, $n)
    {

    }
}