<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <div class="">
       Renseignez votre date de naissance :
     </div>
    <form class="" action="index.php" method="post">
       <input type="text" name="birthdate" value="">
       <input type="submit" name="" value="Envoyer">
    </form>
    <?php
    if (isset($_POST['birthdate'])){
      $birthdate=$_POST['birthdate'];
      $year=date('Y');
      $age=$year-$birthdate;
      echo '<p>vous avez '. $age. ' ans.</p>';
    } else{
      echo "Vous n'avez pas encore renseigné votre date de naissance.";
    }

     ?>
  </body>
</html>
