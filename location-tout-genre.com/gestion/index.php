<?php

// c'est un commentaire

/*
commentaire
sur plusieurs
lignes
*/

/*echo "bonjour c'est la D-WEB";
echo'Bonjour c\'est la D-WEB'; //alt+gr
echo"<p>Bonjour c'est la D-WEB</p>";
*/

//phpinfo();

//une variable est un espace mémoire

//comment declarer une cariable en php?

$nom_variable = "";
$_nomVariable = ""; //camelCase
$nomVariable;       //camelCase
$NomVariable = ""; //deconseiller

/* ne pas faire
$NOMVARIABLE;
$1variable;
$nom-variable;
$nom variable;
$nomvariable;
$nomFilière
*/

/*
$nomFiliere = "D-WEB";
echo "Bonjour la $nomFiliere";
echo 'Bonjour la $nomFiliere';
echo "bonjour la".$nomFiliere;
echo'Bonjour la'.$nomFiliere."c'est l'heure de manger";


$nomFiliere = "PMSPA";
echo "Bonjour la $nomFiliere";
*/

//variables et les chiffres / nombres / additions

$a = 1;
$b = 100;
$c = $a + $b;

//echo $c;
$c += $a;
//echo $c;

//echo $c += $c;

// Les comparaisons

if(!$a == $b)
{
    echo 1;
} else {
    echo 0;
}

// Une soustraction

$d = $b - $c;
//echo $d;

//division 

$f = $d / $e;
//echo $f;

//multiplication

$e = $d * $c;
//echo $e;

//afficher les  informations variable
//var_dump($nomFiliere);
//var_dump($e);

//afficher information lisibles variable
//print_r($nomFiliere);
//print_r($e);

//tableaux
$tab = array();
$tab = [];

// donnes dans un tableau
$tab = array("d-web", "pmspa");
//var_dump($tab);

//nbr colonne //index //valeur correspondant index plus longueur de chaine

$tab2=array($tab, $c, $c);
//var_dump($tab2);

//tableau de 3 elements = array(3)qui sont
/*
-index 0 = un tableau
-index 1 = une variable
-index 2 = une variable
*/


//pour afficher un tableau
//echo $tab2[0][0];


//afficher toutes les valeurs d'untableau

//compter le nombre d'elements d'un tableau
//$nbrElement=count($tab);

//boucle for 
//for($i=0;$i<$nbrElement;$i++)
//{
//echo [$i];
//};

//boucle foreach
foreach($tab as $filiere)
{
//afficher valeur tableau
//echo $filiere;
}

//afficher valeur avec index
foreach($tab as $index=>$filiere)
{
    //echo "L'index : $index, corresspond à la filière : $filiere.";
}

//afficher contenu de $tab2
 


//autre type de boucle
$tab3 = ["un","deux","trois","cinq","stop"];

foreach($tab3 as $value)
{
    //afficher l'un des elements du tableau
    if($value=="trois")
    {
        echo $value;
    }
}
// declarer un tableau dans une cariable qui contient les éléments suivants
/*
janvier, fevrier, mars, 2019, 2018, 2017,"fin", "stop", "recommencer" */

$tab4 = array("janvier", "fevrier", "mars",2019,2018,2017,"fin", "stop", "recommencer" );

//Afficher le contenu du tableau $tabMois
$tabMois = ["Janvier","Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];

foreach($tabMois as $value)
{
    echo $value;
}

//choisir/paramettrer/personaliser index de tableau
$tabVS = ["id-850" => "VERROUX", "id-851" => "RENAY", "id-852" => "VITULIN", "id-853" => "TERRINE"];

foreach($tabVS as $ID => $nomVS){

    //afficher id et nom VS
    
    echo "<pre>";
    echo "L'identifiant : $ID est attribué au VS $nomVS";
    echo "</pre>";
    
}

/*Une variable */

define("JOURNEE", "24h");
echo JOURNEE;

echo "A la fin de cette journée, nous aurons une JOURNEE de plus";
echo "A la fin de cette journée, nous aurons ".JOURNEE." de plus";
echo 'A la fin de cette journée nous aurons '.JOURNEE.' de plus';

//addition de variable constante


define("NBR1", 50);
define("NBR2", 150);

$resultat = NBR1 + NBR2;
echo $resultat;

define("URL", "https://www.nomdedomaine.com");
echo URL."/css/fichierStyle.css";

//structure de controle

$a = 10;
$b = -15;
$c = 0.50;
$e = $a + $c;

//IF

if($a == $e)
{
// si c'est vrai affiche une reponse
echo "la réponse est vraie";

// et mettre d'autres actions 
$e = $a;

//si c'est faut, il ne se passe rien
}

//ELSE
if ($a == $e)
{
    //si c'est vrai affiche quelque chose 
} else{
    //si c'est faut affiche autre chose
    echo "la réponse est fausse.";

    //mettre des actions
    $e = 0;
}

//ELSE IF/ ELSEIF

if($a >$b)
{
    //si c'est vrai
    echo "a est plus grand que b";
} elseif($a = $b){
    echo "a est égal à b";
} else{
    echo "a est plus petit que b.";
}

//Syntaxe alternative
?>
<?php if($a ==5) :?>

<p>A est égale a5</p>

<?php endif; ?>

<?php
$a = 7;
$b = 6;

// : == {}

if($a == 5):
echo "a égale 5";
echo "...";

elseif ($a == 6):
echo "a egale 6";
echo "!!!";

else: //c'est vrai
    echo "a ne vaut ni 5 ni 6";
    endif;
    
    //operateur ternaire = condition ternaire
    //?

    //resultat? si c'est vrai : si c'est faux
    echo $resultat ? $a == $b : "c'est faux";

    //c'est egal 
    if($a == $b)
    {
        //affiche rien
    } else{
        //affice
        echo $result = "c'est faux";
    }

    //exercices
    /*
    -Mettre en place un script pour autoriser les hommes d'un age supérieur à 35ans à écrire un livre 
    
    -Mettre en place un script permettant de lister les personnes ayant réussie l'examen du code de la route. Voici les notes.

    35,37,25,4,40,36,40,12,34,22,20,10,10

    */

    $a=39;

    if($a>35){
        echo "si son age est supérieur a 35ans il est autoriser a écrire un livre";
    }

   
   else{
      echo "si son age est inférieur a 35ans il n'est pas autorisé à ecrire un livre";
  }

  $code = [35,37,25,4,40,36,40,12,34,22,20,10,10];   
  foreach($code as $value) 
  { if($value >34) 
    
    {     
        echo $value; 
    }  
}

//boucle while

/*$i = 1;
while($i <= 10){
    echo $i;
    $i++;
}*/

// boucle do while

$i=0;

do{
    echo $i;
} while($i > 0);

//break
/*
$tabVS = ["RENARD","TERRINE","MARIE-LUCE","THOME"];
foreach( $tabVs as $value)
{
    if( $value == "MARIE-LUVE")
    {
        break;
    }
    echo $value;
}*/

//switch

/*$i = 25;
switch($i)
{
    case 2 :
   
    echo $i;
    break;

    case 20 :
    echo $i;
    break;
    
    case 20 :
    echo $i;
    break;
    
}*/

//include
include("head.php");

?>
