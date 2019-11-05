<?php
//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmNom"]);

foreach($_POST as $key =>$value)
{
    echo $key ."valeur". htmlentities($value) . "<br />";
    //echo "$key valeur". htmlspecialchars($value). "<br />";
/*if(str_word_count(htlmentities(strip_tags($value))) < 25)
{
echo "$key valeur" .htmlentities(strip_tags($value)). "<br />";
} else {
    echo "la chaine correspondant à key, n'est pas valide <br />";
}*/

}

$salt = "MARsouins";

$salt = md5($salt);

echo md5($salt.$_POST["frmPass"]);