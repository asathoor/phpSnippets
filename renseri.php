<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php

/*
* OOP eksempel
* Klassen kan genbruges ;-)
*/

class tjek {

	public function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

}

$felt = new tjek();
$navn = $felt::check_input($_POST['name']); // renser navnefeltet

print( "Efter rensning ser name saadan ud: \n" . $navn ); // feedback

/* 
* WORKSHOP

1. Valider aller formens felter.
2. Prøv om Du kan lave "injektioner" i stil med Snyder Ch. 2 (og maaske Ch. 3).
3. Avanceret I: lav denne kode om til et plugin, som Du kan bruge i fx WordPress.
4. Avanceret II:MySQL: gem input fra en valideret form i en MySQL database.

*/
?>

<h1>PHP FORM VALIDATOR </h1>

<p>
 Eksempel på validering af kode i HTML via PHP.
</p>

<ol>
	<li> trim()  </li>
	<li> stripslashes() </li>
	<li> htmlspecialchars()  </li>
</ol>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br>
   E-mail: <input type="text" name="email">
   <br>
   Website: <input type="text" name="website">
   <br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <br>
   <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>
