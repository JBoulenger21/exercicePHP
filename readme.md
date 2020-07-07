# Calculer l'age en php
L'objectif de cet exercice est de développer en php une petite application qui calcule l'âge actuel de l'utilisateur en fonction de sa date de naissance.

## Le formulaire en html
On commence par générer une balise ```<form>``` et on renseigne le paramètre ```method="post"``` de façon à faire passer l'information renseignée, et on redirige vers une page de traitement en PHP avec le paramètre ```action="traitement.php"```. Dans ce formulaire, on place deux ```input```, l'un de type ```text```, l'autre de type ```submit```. On donne une ```value``` à ce dernier.

```
<form class="" action="traitement.php" method="post">
    <input type="text" name="" value="">
    <input type="submit" name="" value="Envoyer">
</form>
```
## la logique en php
Notre application va simplement opérer un calcul arithmétique : on va soustraire l'année de naissance de l'utilisateur à l'année courante. Pour ce faire, on ouvre une balide ```<?php``` on déclare une variable « birthdate » en faisant précéder son nom du signe « $ » puis on lui affecte dans un premier temps une valeur de type ```number``` : la date de naissance du programmeur. On déclare une seconde variable ```$year``` à laquelle on affecte aussi une valeur de type ```number``` : l'année en cours.
On déclare une troisième variable ```$age```, on lui affecte la variable ```$year``` suivie de l'opérateur arithmétique « - » puis de la variable ```$birthdate```. Enfin, on ferme la balise PHP.
```
<?php
$birthdate=1990;
$year=2020;
$age=$year-$birthday;
echo $age;
 ?>
```
## La récupération dynamique des informations
Dans la première partie nous avions attribué la méthode ```post``` à la div ```form```, nous alllons maintenant récupérer l'information entrée par l'utilisateur dans la page qui fait le traitement en php.
Pour ce faire, nous allons utiliser la variable superglobale ```$_POST```.
Une 'superglobale' signifie simplement que cette variable est disponible dans tous les contextes du script.
```
$birthdate=$_POST['birthdate'];
```
Maintenant, nous allons demander à php de récupérer l'année en cours. Pour cela, nous allons utiliser la fonction ```date()``` à laquelle nous passons en paramètre ```"Y"```.

## Vérification sur le champs de formulaire
On va maintenant vérifier que la variable superglobale ```$_POST``` est paramétrée en utilisant if à laquelle on place en paramètre la fonction ```isset```.
```if (isset($_POST['birthdate'])){
  $birthdate=$_POST['birthdate'];
  $year=date('Y');
  $age=$year-$birthdate;
  echo '<p>vous avez '. $age. ' ans.</p>';
} else{
  echo "Vous n'avez pas encore renseigné votre date de naissance.";
}```
