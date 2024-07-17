

<?php
include '../../Controller/userC.php';
include_once '../../Model/user.php';
$userC = new usersC();
$liste=$userC->listUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align=center >
    <h1  >LISTE DES UTILISATEURS </h1>
    <h2> <a href="../frontoffice/adduser.php">addUser</a></h2>
   
    </div>
    <table border='1' align="center" width="70%"> 
    <tr>
        <th>USERNAME</th>
        <th>CIVILITE</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th >EMAIL</th>
        <th>EXPERIENCE</th>
        <th>NIVEAU D'ETUDE</th>
        <th>FORMATION</th>
        <th>GOUVERNORAT</th>
        <th>TELEPHONE</th>
        <th>VILLE</th>
        <th>CV</th>
        <th><button type="edit">modifier</button></th>
        <th><button type="delete">supprimer</button></th>
        
       
    </tr>

<?php
foreach ($liste as $user){

?>

<tr >
    <td><?=$user['username'] ;?></td>
    <td><?=$user['civilite'] ;?></td>
    <td><?=$user['prenom'] ;?></td>
    <td><?=$user['nom'] ;?></td>
    <td ><?=$user['email'] ;?></td>
      
    <td><?=$user['experience'] ;?></td>
    <td><?=$user['nivetude'] ;?></td>
    <td><?=$user['typeformation'] ;?></td>
    <td><?=$user['gouvernorat'] ;?></td>
    <td><?=$user['telephone'] ;?></td>
    <td><?=$user['ville'] ;?></td>
    <td><?=$user['cv'] ;?></td>
    <td align="center">
                    <form method="POST" action="updateUser.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $user['email']; ?> name="email">
                    </form>
                </td>
    <td>
        <button><a href="deleteUser.php?email=<?= $user['email'];?>">supprimer</a></button>
    </td>
    

</tr>
<?php
}
?>
</table>


</body>
</html>