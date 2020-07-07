<?php
  $birthdate=$_POST['birthdate'];
  $year=date('Y');
  $age=$year-$birthdate;
  echo '<p>vous avez '. $age. ' ans.</p>';
 ?>
