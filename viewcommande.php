
<?php include('config.php');?>


<?php
$email=""; 
$isSuccess=false;
if (isset($_POST['submit'])){   
      
            $email=VerifyInput($_POST['email']);
            $isSuccess=true;
             
             if(!empty($email))
              {       
                $email;
              }
              else
              {
              $message_error="Entrer votre Adresse-email!";
              $isSuccess=false;
              }


            if($isSuccess==true)
            {   
            
           $verifyuser= $bd->prepare('SELECT *FROM formulaire_achat WHERE email=?') ;
           $verifyuser->execute(array($email));
           $row=$verifyuser->rowCount();
            if($row==true)
             {
              $userinfo=$verifyuser->fetch();
              $message="Voici le contenu de votre panier";
             }else
             {
             
              $message_error="Aucun achat de plan est associé à cette email!";
              $user_info=$verifyuser->fetch();
             }
           
           }  
            
            
             
}


          
   

 function VerifyInput($var)
 {

   $var=trim($var);
   $var=htmlspecialchars($var);
   $var=stripcslashes($var);
  
   return $var;
}


?>
 <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.1.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <title> Acceuil</title>
  </head>
  <body>


     <h4 style="text-align:center"> <b>Voir le contenu de son panier</b> </h4>
<div class="container">
  <form method="POST"  action="" class="form-horizontal" role="form">
    <div id="signupalert" style="display:none" class="alert alert-danger">
    </div>
   
         
     <div class="form-group">
        <label for="email" class="col-md-3 control-label">Email</label>
        <div class="col-md-5">
            <input type="email" id="email" class="form-control" name="email" placeholder="Votre Email">
           <p style="color:red"> <?php if(isset($message_error)) { echo $message_error;}?> </p>
        </div>
    </div>
       

        <div class="form-group">
        <!-- Button -->
        <div class="col-md-offset-3 col-md-9">
            <button id="btn-signup" type="submit" name="submit"class="btn btn-info col-md-6"><i class="icon-hand-right"></i>VALIDER</button>
           
        </div>
    </div>
</form>
     <h4 style="color:green"> <?php if(isset($message)) { echo $message;}?> </h4>  

      <div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> numero_Plans </th>
              <th class="text-center"> Nom_Plan </th>
              <th class="text-center"> Date_achat </th>
              <!--<th class="text-center"> E-Mail </th>
              <th class="text-center"> Ville </th>
              <th class="text-center"> Date de Visite terrain </th>
              <th class="text-center"> Date d'expiraion-Visite </th>-->
            </tr>
          </thead>

          <tbody>
            <tr class="edit" id="detail">
              <td id="no" class="text-center"> <?php


              echo $userinfo['id_client'];?> </td>
              <td id="name" class="text-center"> <?php echo $userinfo['nom_plan'] ;?></td>
             <td id="mobile" class="text-center"> </td>
              <!--<td id="mail" class="text-center"> abc@gmail.com </td>
              <td id="city" class="text-center"> New York </td>
              <td id="city" class="text-center"> 15/04/2019 </td>
               <td id="city" class="text-center">18/04/2019 </td>-->
            </tr>
          </tbody>
        </table>
      </div>
        
      <div class="panel-footer">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-8">
              </div>
              <div class="col-md-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

