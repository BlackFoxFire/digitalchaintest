<?php

/**
 * DigitalChainTest.php
 * @Auteur : Christophe Dufour
 * 
 * Permet de tester les nombres provenant de formulaire HTLM
 */

 namespace Blackfox\DigitTester;

 class DigitalChainTest
 {

    /**
     * Méthodes
     */

    /**
     * Test si une chaine de caractère est un entier
     * Retourne 1 si la chaine est un entier, sinon 0.
     * Retourne false en cas d'erreur.
     * 
     * @param string $subject : La chaine de caractère à tester
     * @return int|false
     */
    public static function isInt(string $subject): int|false
    {
        $pattern = "#^[-+]?[0-9]+$#";

        return preg_match($pattern, $subject);
    }

    /**
     * Test si une chaine de caractère est un nombre décimal
     * Retourne 1 si la chaine est un nombre décimal, sinon 0.
     * Retourne false en cas d'erreur.
     * 
     * @param string $subject : La chaine de caractère à tester
     * @return int|false
     */
    public static function isFloat(string $subject): int|false
    {
        $pattern = "#^[-+]?[0-9]+(\.[0-9]+)?$#";
        
        return preg_match($pattern, $subject);
    }

    /**
     * Détermine si une chaine de caractère a une valeur positive
     * Retourne true si la valeur est positive, sinon false.
     * Retourne null si la chaine à tester n'est pas numérique
     * 
     * @param string $text : La chaine de caractère à tester
     * @return bool|null
     */
    public static function isPositive(string $text): bool|null
    {
        if(is_numeric($text)) {
            return ($text > 0) ? true : false;
        }

        return null;
    }

    /**
     * Détermine si une chaine de caractère a une valeur négative
     * Retourne true si la valeur est négative, sinon false.
     * Retourne null si la chaine à tester n'est pas numérique
     * 
     * @param string $text : La chaine de caractère à tester
     * @return bool|null
     */
    public static function isNegative(string $text): bool|null
    {
        if(is_numeric($text)) {
            return ($text < 0) ? true : false;
        }

        return null;
    }

    /**
     * Détermine si une chaine de caractère a une valeur comprise dans un intervalle définit
     * Retourne true si la valeur est dans l'intervalle, sinon false.
     * Retourne null si la chaine à tester n'est pas numérique
     * 
     * @param string $text : La chaine de caractère à tester
     * @return bool|null
     */
    public static function isBetween(string $text, float $min, float $max): bool|null
	{
        if(is_numeric($text)) {
            return (($min <= $text) && ($text <= $max)) ? true : false;
        }
		
		return null;
	}

 }
