<?php 
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=babacars_portfolio','babacars','fPZzuYT9dy',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_GET['id'])) {
	

$cle=$_GET['id'];

$stmt = $bdd->prepare("SELECT * FROM projet where id = ?");
if ($stmt->execute(array($_GET['id']))) {
  while ($row = $stmt->fetch()) {
    
    $test1=($row['nom']);$test2=($row['description']);$test3=($row['collaborateur']);$test4=($row['technologie']);
  }
  

  echo '  <div class="cadre"><p style="color:#0FB2FF; font-size:130%">Nom :'.$test1.'</p>';
    echo ' <p style="color:#0FB2FF; font-size:130%">Description :'.$test2.'</p>';
      echo ' <p style="color:#0FB2FF; font-size:130%">Collaborateur :'.$test3.'</p>';
           echo '  <p style="color:#0FB2FF; font-size:130%">technologie :'.$test4.'</p></div>';
 
       


}
}
else
{
printf("Entrez un url correct :^)");
}