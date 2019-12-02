<?php
//déclaration de la variable lastname
$lastname = 'Nom de famille';
//déclaration de la variable firstname
$firstname = 'Prénom';
//déclaration de la variable age
$age = 30;
 ?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPpartie1exo2</title>
  </head>
  <body>
   <p>
      <!--Affichage dans Html -->
    <?php
    echo $lastname;
    echo $firstname;
    echo $age;
    ?>
   </p>
   <p>
    <?php
     echo $lastname . ' ' . $firstname . ' ' . $age;
    ?>
   </p>
   <p>
    <?= $lastname . ' ' . $firstname . ' ' . $age; ?>
   </p>
   <p>
    Nom : <?= $lastname; ?>
   </p>
   <p>
    Prénom : <?= $firstname; ?>
   </p>
   <p>
    Age : <?= $age; ?> ans
   </p>
  </body>
</html>
