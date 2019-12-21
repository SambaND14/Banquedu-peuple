<?php 
session_start();
if (!isset($_SESSION['email'])) {
   echo "<script>window.open('login.php','_self')</script>";
}else{

 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="La technologie en global">
    <meta name="author" content="SAMBA NDIAYE">

    

    <title id="WEBSIT_NAME">
    <?php 
      require('constants/constants.php');
    echo isset($title)
         ? $title . '_' . WEBSIT_NAME
         : WEBSIT_NAME;
    ?>

  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/customer.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/database/libs/font-awesome-4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <link rel="stylesheet" type="text/css" href="libs/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="libs/alertifyjs/css/themes/bootstrap.min.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <link href="favicon.ico" rel="icon" type="image/jpg" style="border-radius: 0.5em;" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>

<body>




<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="index.php">home</a></li>
  
</ul>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"><i class="material-icons" style="font-size: 50px">home</i></a>
    
  </div>
</nav>


    <table class="striped">
   <thead>
      <tr align="center" style="background-color: #004d99; color: white;">
      <th scope="col">id_m</th>&nbsp;
      <th scope="col">Nom</th>&nbsp;
      <th scope="col">prenom</th>&nbsp;&nbsp;
      <th scope="col">Profil</th>&nbsp;
      <th scope="col">Quartier</th>&nbsp;
      <th scope="col">Sex</th>&nbsp;
      <th scope="col">Numéro</th>&nbsp;
      <th scope="col">Email</th>&nbsp;
      <th scope="col">Matricule</th>&nbsp;
      <th scope="col">solde</th>&nbsp;
    </tr>
  </thead>
  <tbody>
     <?php
     include('config/bd.php');

     $get_pro = "select * from users";

     $run_pro = mysqli_query($con, $get_pro);


     $i = 0;
     while ($row_pro=mysqli_fetch_array($run_pro)) {

     
      $nom = $row_pro['nom'];
      $prenom = $row_pro['prenom'];
      $avatar = $row_pro['avatar'];
     
       $matricule = $row_pro['matricule'];
      $solde = $row_pro['solde'];
      $date = $row_pro['date'];
      

      $i ++;
     




      ?>

    <tr align="left">
      

      <td><?php echo $nom; ?></td>

      <td><?php echo $prenom; ?></td>
       
      <td><a href="profil.php?profil_views=<?php echo $id_membre?>"><img style="border-radius: 100%;" src="images/<?php echo $avatar; ?>" width="60" height="60"/></a></td>

      
      <td><?php echo $matricule; ?></td>
      <td><a style="color: green; text-decoration: none;font-size: 30px;" href="solde.php"><?php echo $solde."  "."FCFA"; ?></a></td>
        
    </tr>


    <?php } ?>
    </tbody>
</table>

    <div class="col-sm-4 col-sm-offset-4">
                
                <p style="color:#33b5e5; text-align: center;"  >Groupeisi.sn &copy; 2019, All Rights Reserved</p>
                <marquee direction="left">
                <p style="color:#33b5e5; text-align: center;"  > CE SITE A ETE CONSU PAR SAMBA NDIAYE L3 LPGL </p></marquee>
            </div>


        </div>

</body>
</html>

    <?php } ?>