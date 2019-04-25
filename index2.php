    


<?php
  include('config.php');

  

  

$nom=$prenom=$email=$contact=$ville="";
$nom_error=$prenom_error=$email_error=$contact_error=$ville_error=$detailles_lieu=$email_text="";
$emailto="koffirolandndri@gmail.com";


$success=false;     
 
 if(isset($_POST['submit']))
 {
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=htmlspecialchars($_POST['email']);
    $contact=htmlspecialchars($_POST['contact']);
    $ville=htmlspecialchars($_POST['ville']);
    $detailles_lieu=htmlspecialchars($_POST['detailles_lieu']);
    $success=true;
       if(isset($nom)&&!empty($nom)&&isset($prenom)&&!empty($prenom)&&isset($email)&&!empty($email)&&isset($contact)&&!empty($contact)&&isset($ville)&&!empty($ville)&&isset($detailles_lieu)&&!empty($detailles_lieu))
            {
           if(!is_numeric($nom)&&!is_numeric($prenom)&&!is_numeric($ville))
           {
             if(isEmail($email))
             {
               if(isPhone($contact))
               {
                 $contact;
                  $email_text .="nom:$nom/n";
                  $email_text .="prenom:$prenom/n";
                  $email_text .="email:$email/n";
                  $email_text .="contact:$contact/n";
                  $email_text .="detailles_lieu:$detailles_lieu/n";
                  
               }else
               {

                $message_error="Contact non valide!";
                $success=false;
               } 

             }else
             {

             $message_error="Enter une adresse e-mail valide!";
             $success=false;
             }  
              
           }else
           {
              $message_error="Enter des caractères corrects!";
              $success=false;
           }

        }else
        {
          $message_error="Entrer tous les champs!";
          $success=false;
        }
     
      

      if(isset($_GET['nom_plan'])&&!empty($_GET['nom_plan']))
      {
         $nom_plan=(string)$_GET['nom_plan'];   
         if($success==1)
         {
          $req=$bd->prepare('INSERT INTO formulaire_achat(nom,prenom,email,contact,ville,nom_plan,detailles_lieu) VALUES(?,?,?,?,?,?,?)');
       $req->execute(array($nom,$prenom,$email,$contact,$ville,$nom_plan,$detailles_lieu));
         
         $header="From:$nom $prenom <$email>\r\nReply-to:$email";
         mail($emailto,"message de votre site",$email_text,$header); //  email adreesser à moi 
         $nom=$prenom=$email=$contact=$detailles_lieu="";     
       }
     
      }     
     
}
        
       


function isEmail($var)
    {
   return filter_var($var,FILTER_VALIDATE_EMAIL);    
    }

function isPhone($var)
    {
    return preg_match("#^[0-9]{2}([-. ]?[0-9]{2}){3}$#", $var);
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
     
      
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="thumbnail">
            <h2 style="text-align:center">Remplir le formulaire pour recevoir par mail les coordonnées de l'architecte pour l'achat<b></b></h2>
          </div>
        </div>
      </div>
    </div>

  <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <?php if(isset($message_error))
            {
            echo'<div class="alert alert-danger">';
            echo' <a class="close" data-dismiss="alert" href="#">×</a>';
            }

             if(isset($message_success))
             {
             echo'<div class="alert alert-success">';
             echo' <a class="close" data-dismiss="alert" href="#">×</a>';
             echo($message_success);  
             }  
            ?>
               <h4 style="text-align:center"><?php if(isset($message_error)){echo $message_error;}?></h4>
            
            </div>
          </div>
        </div>
      </div>

      

<div class="container">
  <form method="POST"  action="" class="form-horizontal" role="form">
    <div id="signupalert" style="display:none" class="alert alert-danger">
    </div>
    <div class="form-group">
        <label for="text" class="col-md-3 control-label">Nom</label>
        <div class="col-md-5">
            <input type="text" class="form-control" name="nom" placeholder="nom" value="<?php if(isset($nom)){ echo ($nom); } ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-md-3 control-label">Prenom</label>
        <div class="col-md-5">
            <input type="text" id="login-password" class="form-control" name="prenom" placeholder="prenom"  value="<?php if(isset($prenom)){ echo ($prenom); } ?>">
        </div>
    </div>
     <div class="form-group">
        <label for="email" class="col-md-3 control-label">Email</label>
        <div class="col-md-5">
            <input type="email" id="email" class="form-control" name="email" placeholder="Votre Email">
        </div>
    </div>
    <div class="form-group">
        <label for="Ville" class="col-md-3 control-label">Indiquez la ville où vous souhaitez faire construire :</label>
        <div class="col-md-5">
            <input type="text" class="form-control" name="ville" placeholder="Département,ville..." value="<?php if(isset($ville)){ echo ($ville); } ?>">
        </div>
    </div>
       
       <div class="form-group">
        <label for="Ville" class="col-md-3 control-label">Entrer plus de détailles sur lieu de construction:</label>
        <div class="col-md-5">
            <textarea type="text" class="form-control" name="detailles_lieu" placeholder="A propos du lieu e construction" value="<?php if(isset($ville)){ echo ($detailles_lieu); } ?>"></textarea>
        </div>
    </div>

       <div class="form-group">
        <label for="icode" class="col-md-3 control-label"> Votre contact </label>
        <div class="col-md-5">
            <input type="text" class="form-control" name="contact" placeholder="Votre contact" value="<?php if(isset($contact)){ echo ($contact); } ?>">
        </div>
    </div>
        <div class="form-group">
        <!-- Button -->
        <div class="col-md-offset-3 col-md-9">
            <button id="btn-signup" type="submit" name="submit"class="btn btn-info col-md-6"><i class="icon-hand-right"></i>VALIDER</button>
           
        </div>
    </div>
</form>
<p style="color:red;text-align: center;font-size:20px"> NB: tous les champs sont obligatoires </p>
</div>
   <h1 style="text-align:center"> <b>Nos Parténaires</b> </h1>
  <div class="container" style="text-align:center">
      <div class="row">
         <div class="col-lg-6 col-xs-4">
         <img src="image/mtnci.jpg"/>
      </div>
    <div class="col-lg-6 col-xs-4">
        <img src="image/orangeci.png"/>
      </div>
    </div>
  </div>
</body>
</html>

