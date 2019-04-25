$(document).ready(function(){

      var resultat=true;
      $('#form').submit(function(){
      
      if($('#email').val()== ""){
        $('#email').attr('placeholder','Champs requis!').parent().addClass('has-error');

          var resultat=false;

      }
       
      return resultat;

       });



     }