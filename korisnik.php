<?php 

class Osoba
{
   public $visina = 0;
   public $tezina = 0;
   public $ime = "";
   public function __construct($name, $weight, $height)
   {
$this->ime = $name;
$this->tezina = $weight;
$this->visina = $height;
   }

   public function cao()
   {
   	echo "Ja se zovem $this->ime, imam $this->tezina kilograma i visok sam $this->visina";
   }
}

$person = new Osoba("Toma", 80, 58, 210,5);
$person->cao();

$person2 = new Osoba("Milenko", 80, 58, 180,5);
$person2->cao();

$person3 = new Osoba("Osoba3", 70, 80, 170,5);
$person3->cao();

$person4 = new Osoba("Osoba4", 100, 90, 190,5);
$person4->cao();

$person5 = new Osoba("Osoba5", 70, 90, 180,5);
$person5->cao();

$person6 = new Osoba("Osoba6", 70, 90, 170,5);
$person6->cao();

$person7 = new Osoba("Osoba7", 80, 100, 170,5);
$person7->cao();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <table>
 	<tr>
 		<th>Ime</th>
 		<th>Kilaza</th>
 		<th>Visina</th>
 	</tr>

 	<tr>
 		<td><?php echo $person->ime; ?></td>
 		<td><?php echo $person->tezina; ?></td>
 		<td><?php echo $person->visina; ?></td>
 		
 	</tr>

 	<tr>
 		<td><?php echo $person2->ime; ?></td>
 		<td><?php echo $person2->tezina; ?></td>
 		<td><?php echo $person2->visina; ?></td>
 		
 	</tr>
 	<tr>
 		<td><?php echo $person3->ime; ?></td>
 		<td><?php echo $person3->tezina; ?></td>
 		<td><?php echo $person3->visina; ?></td>
 		
 	</tr>

 	<tr>
 		<td><?php echo $person4->ime; ?></td>
 		<td><?php echo $person4->tezina; ?></td>
 		<td><?php echo $person4->visina; ?></td>
 		
 	</tr>

<tr>
 		<td><?php echo $person5->ime; ?></td>
 		<td><?php echo $person5->tezina; ?></td>
 		<td><?php echo $person5->visina; ?></td>
 		
 	</tr>
 	<tr>
 		<td><?php echo $person6->ime; ?></td>
 		<td><?php echo $person6->tezina; ?></td>
 		<td><?php echo $person6->visina; ?></td>
 		
 	</tr>

 	<tr>
 		<td><?php echo $person7->ime; ?></td>
 		<td><?php echo $person7->tezina; ?></td>
 		<td><?php echo $person7->visina; ?></td>
 		
 	</tr>


 </table>
</body>
</html>