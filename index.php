<?php include('config.php');?>

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
    <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-inverse side-collapse in">
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#Home">Accueil</a></li>
              <li><a href="#users"> Qui sommes-nous?</a></li>
              <li><a href="http://placesforlove.com">Contact</a></li>
              <li>
                <a href="viewcommande.php"><button style="margin-left: 350px" type="button" class="btn btn-success btn-sm pull-right" value="">Voir ma commande</button></a>
              </li>
              <li>
                <a href="http://placesforlove.com"><button type="button" class="btn btn-success btn-sm pull-right" value="">Nous Vendre un terrain </button></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="container side-collapse-container">
      <div class="row">
        <div class="bienvenu">
          <b><h1 style="text-align:center;color:#DF6D14"><b>AKWABA SUR BUY~PLAN.</b> 
          </h1><p style="text-align:center"> Trouver le plan qui vous convient en un click.</p></b>
        </div>
      </div>
    </div>
     
    <div class="container side-collapse-container">
      <div class="row">
        <div class="bienvenu">
          <h1 style="background-color:#AD4F09;color:#fff;text-align:center">CONSULTER NOS  MAISONS AFIN D'ACHETER LE PLAN</h1>
        </div>
      </div>
    </div>
     
    <div class="container thu">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="bienvenu">
              
            <div class="thumbnail">
              <img id=""src="image/maison2.jpg">
              <h1>
                 
                <p style="color:#83A697;text-align: center">
                Maison sur la cote Oueste
              
                </p>
                <p>
                 
                Prix du plan:150.000FCFA
                 </p>
              </h1>
              <a href="index2.php?nom_plan=maison sur la cote Oueste"><button  type="button" class="btn btn-primary btn-md" ><b>Contacter l'architecte pour l'achat du  plan</b> </button></a>
              
              
              
               <a href=""><button data-toggle="modal" data-target="#squarepaceModal" class="btn btn-primary btn-md">Voir le plan avec plus de detailles</button></a> 
            </div>

            </div>
            <div class="col-lg-12 col-xs-12">
                <div class="bienvenu">
              
                 <div class="thumbnail">
              <img  src="image/maison1.jpg">
              <h1>
                 
                <p style="color:#83A697;text-align: center">
                  
                 Maison au service de la familles
                </p>
                
                  <p>
                    Prix du plan:100.000FCFA
                     
                  </p>
              </h1>
              <a href="index2.php?nom_plan=maison au service de la famille"><button  type="button" class="btn btn-primary btn-md" ><b>Contacter l'architecte pour l'achat du  plan</b> </button></a>
              
              
               <a href=""><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary btn-md ">Voir le plan avec plus de detailles</button></a> 
            </div>

            </div>


          </div>
        </div>
       <?php include('footer.php');?> 
  </body>
</html>
                 <!---Maison 1---->
 <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel">Plan de Maison au service de la familles</h3>
    </div>
    <div class="modal-body">
      
    <img id="plan1" src="image/plan4.jpg" class="zoom">
       <button id="pluse" type="button" class="btn btn-primary glyphicon ghyphicon-search btn-md"> Agrandir le plan</button>
       <button id="moinse"type="button" class="btn btn-success btn-md"> Revenir à la taille initiale</button>
    <h1 style="text-align:center" > Surface 100 m2 </h1>
          <a href="index2.php?nom_plan=Maison au service de la famille"><button style="margin-left: 200px" type="button" class="btn btn-success btn-lg">Choisir le plan</button></a>
    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Fermer</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>




             <!-------- Maison2------->

<div class="modal fade" id="squarepaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h2 class="modal-title" id="lineModalLabel"><b>Plan de   Maison sur la cote Oueste</b> </h2>
    </div>
       <div>
        <div class="zoom"> </div>
        <div class="modal-body">
      <img  id="plan"src="image/Plan1.png" class="zoom">
       <button id="plus" type="button" class="btn btn-primary btn-md"> Agrandir le plan</button>
       <button id="moins" type="button" class="btn btn-success btn-md "> Revenir à la taille initiale</button>
        
          
          <h1 style="text-align:center" > Surface 102 m2 </h1>
          <a href="index2.php?nom_plan=maison sur la cote Oueste"> <button style="margin-left: 200px" type="button" class="btn btn-success btn-lg">Choisir le plan</button></a>
        
    </div>
  </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button  data-dismiss="modal"  role="button"><b>Fermer</b></button>
        </div>
      
      </div>
    </div>
  </div>
  </div>
</div>


<script type="text/javascript">
    
   $(document).ready(function(){

    $('#plus').click(function(){

       $('#plan').css('width','+=100px');
       
    });
    $('#moins').click(function(){

       $('#plan').css('width','-=100px');

    });

   });

  </script>

  <script type="text/javascript">
    
    $(document).ready(function(){

    $('#pluse').click(function(){

       $('#plan1').css('width','+=100px');

    });
    $('#moinse').click(function(){

       $('#plan1').css('width','-=100px');

    });

   });

  </script>