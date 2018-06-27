<?php

$ime = "Toma"; # String
$godine = 25; # integer
$kilaza = 80.5; # float
$predmeti = ["Matematika", "Srpski", 14.2];
echo $ime; 

class Korisnik
{
	public $ime = "Toma";
	private $godine = 24;
	public function cao ()
	{
		echo " <br>Cao ja sam ".$this->ime;
	}
}

$user = new Korisnik();
echo $user->ime;
$user->cao();




class Matematika
{
	public function sabiranje($br1, $br2)
	 {
	 	echo $br1 + $br2;
	 }

}
$user = new Matematika();
$user->sabiranje(10, 20);




?>