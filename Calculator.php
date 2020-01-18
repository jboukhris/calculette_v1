<?php

class Calculator
{
	private $precision;

	public function __construct($precision = 1)
	{
	    $this->precision=$precision;

	}
	public function mul(float $a, float $b)
	{
          $resultat = $a * $b;
          return round($resultat, $this->precision);
	}

	public function sub(float $a, float $b)
	{
		$resultat = $a - $b;
        return round($resultat, $this->precision);
	}
	public function add(float $a, float $b)
	{
		$resultat = $a + $b;
        return round($resultat, $this->precision);
	}

    public function avg(array $note)
	{
	    $nb_note = count($note);
        $add = array_sum($note);
        $resultat = $add / $nb_note;
        return round($resultat,$this->precision);
    }
}