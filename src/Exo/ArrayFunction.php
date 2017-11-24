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
 *
 * @package Exercise\Exo
 */
class ArrayFunction
{
    /**
     * Modifier la fonction afin que cette dernière renvoie
     * le nombre d'élément du tableau (voir exemple)
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
     */
    public function countElementArray($array)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie
     * le même tableau avec toutes les clés du tableau passés en majuscule
     * Ex:
     * $array = [
     *     'paris' => 30,
     *     'orleans' => 22,
     *     'toulouse' => 16,
     *     'bordeaux' => 19,
     *     'la loupe' => 12
     * ];
     *
     * La fonction devra retourner
     *  [
     *     'PARIS' => 30,
     *     'ORLEANS' => 22,
     *     'TOULOUSE' => 16,
     *     'BORDEAUX' => 19,
     *     'LA LOUPE' => 12
     * ];
     *
     * Hint: http://php.net/manual/fr/function.array-change-key-case.php
     *
     * @param $array
     *
     * @return array
     */
    public function changeCase($array)
    {

    }

    /**
     * En considérant un tableau à deux niveau,
     * Modifier la fonction afin qu'elle retourne
     * un tableau contenant uniquement le contenu d'une colonne
     * comme au sous tableau (vois exemple)
     *
     * Ex:
     * $array = [
     *      [
     *          'id' => 2135,
     *          'first_name' => 'John',
     *          'last_name' => 'Doe',
     *      ],
     *      [
     *          'id' => 3245,
     *          'first_name' => 'Sally',
     *          'last_name' => 'Smith',
     *      ],
     *      [
     *          'id' => 5342,
     *          'first_name' => 'Jane',
     *          'last_name' => 'Jones',
     *      ],
     *      [
     *          'id' => 5623,
     *          'first_name' => 'Peter',
     *          'last_name' => 'Doe',
     *      ]
     * ];
     * $column = 'first_name'
     *
     * La function devra renvoyer
     *  [
     *      'John',
     *      'Sally',
     *      'Jane',
     *      'Peter
     *  ]
     *
     * Hint: http://php.net/manual/fr/function.array-column.php
     *
     * @param $array
     *
     * @return array
     */
    public function returnColumn($array, $column)
    {

    }

    /**
     * Considérer un tableau clé => valeur,
     * modifier la fonction afin que cette dernière retourne
     * le même tableau mais inverser (voir ex)
     *
     * Ex:
     * $array =
     *      [
     *          'florian' => 29,
     *          'alexis' => 28,
     *          'marinne' => 27
     *      ]
     *
     * La fonction devra retourner
     * [
     *      29 => 'florian',
     *      28 => 'alexis,
     *      27 => 'marinne'
     * ]
     *
     * Hint: http://php.net/manual/fr/function.array-flip.php
     *
     * @param $array
     *
     * @return array
     */
    public function flipKeyValue($array)
    {

    }

    /**
     * Considérer deux tableaux de même longueur,
     * l'objectif est de combiner les deux tableaux afin
     * de créer un tableau dans lequel les valeurs
     * du tableau A seront les clés du tableau B (voir exemple)
     *
     * Ex:
     * $key = [
     *      'formateur',
     *      'campus manager',
     *      'ecole'
     * ]
     * $value = [
     *      'florian',
     *      'marinne',
     *      'paris'
     * ]
     *
     * La fonction devra retourner un tableau de la forme:
     * [
     *      'formateur' => 'florian',
     *      'campus manager' => 'marinne',
     *      'ecole' => 'paris
     * ]
     *
     * Hint: http://php.net/manual/fr/function.array-flip.php
     *
     * @param $key
     *
     * @param $value
     *
     * @return array
     */
    public function myArrayCombine($key, $value)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie le boolean true
     * si la clé passé en paramètre est présente dans le tableau,
     * et false dans le cas contraire
     *
     * Ex 1:
     * $array = [
     *      'formateur' => 'florian',
     *      'campus manager' => 'marinne',
     *      'ecole' => 'paris
     * ]
     * $key = 'formateur'
     * La fonction devra retourner true
     *
     * Ex 2:
     * $array = [
     *      'formateur' => 'florian',
     *      'campus manager' => 'marinne',
     *      'ecole' => 'paris
     * ]
     * $key = 'eleve'
     * La fonction devra retourner false
     *
     * Hint: http://php.net/manual/fr/function.array-key-exists.php
     *
     * @param $key
     *
     * @param $array
     *
     * @return bool
     */
    public function checkKey($key, $array)
    {

    }

    /**
     * Modifier la fonction afin que les trois tableaux
     * passés en paramètre ne forme plus qu'un
     *
     * Ex:
     * $arrayOne = ['val1', 'val2', 'val3'];
     * $arrayTwo = ['val4', 'val5', 'val6'];
     * $arrayTree = ['val7', 'val8', 'val9'];
     *
     * La fonction devra retourner:
     * ['val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'val8', 'val9']
     *
     * Hint: http://php.net/manual/fr/function.array-merge.php
     *
     * @param $arrayOne
     * @param $arrayTwo
     * @param $arrayTree
     *
     * @return array
     */
    public function mergeArray($arrayOne, $arrayTwo, $arrayTree)
    {

    }

    /**
     * Modifier la fonction afin que cette dernière renvoie
     * la somme des valeurs du tableau
     *
     * Ex:
     * $array = [1, 3, 4, 9, 7, 7, 5]
     *
     * La fonction devra retourner 36
     *
     * Hint: http://php.net/manual/fr/function.array-sum.php
     *
     * @param  $array
     * @return float|int
     */
    public function sumArray($array)
    {

    }

    /**
     * Modifier la fonction afin qu'elle retourne un tableau
     * dans lequel les éléments sont triés par ordre croissant
     *
     * Ex:
     * $array = [0, 9, 6, 5, 4, 6, 1, 1, 9, 567, 7]
     *
     * La fonction devrai retourner
     * [0, 1, 1, 4, 5, 6, 6, 7, 9, 9, 567]
     *
     * Hint: http://php.net/manual/fr/function.sort.php
     * Hint 2: Attention à ce que retourne la fonction
     *
     * @param array $array
     *
     * @return array
     */
    public function sortArray($array)
    {

    }

    /**
     * Modifier la fonction afin qu'elle retourne
     * un boolean true sur la valeur de $search est présente dans $array
     *
     * Ex:
     * $array = [
     *      'formateur' => 'florian',
     *      'campus manager' => 'marinne',
     *      'ecole' => 'paris
     * ]
     * $search = 'florian'
     *
     * La fonction devra retourner true
     *
     * Ex 2:
     * $array = [
     *      'formateur' => 'florian',
     *      'campus manager' => 'marinne',
     *      'ecole' => 'paris
     * ]
     * $search = 'alexis'
     *
     * La fonction devra retourner false
     *
     * Hint: http://php.net/manual/fr/function.in-array.php
     *
     * @param  $search
     * @param  $array
     * @return bool
     */
    public function checkIfInArray($search, $array)
    {

    }
}