    <!-- RECUPERATION DES INFORMATIONS DU FORMULAIRE -->
 <?php
 
 $nomError = $prenomError = $adresseError = $emailError = $telephoneError = $referencepaiemenentError = "";
 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  
 
   if(empty(verrifyInput($_POST['nom']))){
    
        if(empty(verrifyInput($_POST['prenom']))){
         
        if(empty(verrifyInput($_POST['adresse']))){
         
          if(empty(verrifyInput($_POST['email']))){
           
            if(empty(verrifyInput($_POST['telephone']))){
             
              if(empty(verrifyInput($_POST['referencepaiement']))){
                
             }
             
            }
          }
         
         } 
         
        }
   }
   else {require("connexion.php");}
  
   
    
  }
  
  
  function verrifyInput($var){
    
     $var = trim($var);
     $var = stripcslashes($var);
     $var = htmlspecialchars($var);
     
     return $var;
  }
  
    
?>







<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8"/>
        <link href="Formulaire.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compstible" content="ie-edge">
    </head>
   
    <body>
        <!--DEBUT FORMULAIRE D'achat-->
        <div class="form">
            <h3 class="titre">Formulaire d'achat de votre voiture</h3>
            <form action="" method="post">
                <p>Nom:</p>
                <input type="text" name="nom" id="nom" placeholder="" required>
               
                <p>Prenom:</p>
                <input type="text" name="prenom" id="prenom" placeholder="" required>
                
                <p>Adresse:</p>
                 <input type="text" name="Adresse" id="Adresse" placeholder="" required>
                <!--<label for="Sexe"></label>
                <select name="sexe" id="sexe">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select> -->
                
                <p>Email:</p>
                <input type="email" name="email" id="email" placeholder="" required>
                
                <p>Telephone</p>
                <input type="number" name="tel" id="tel"  placeholder="" required>
                
                <p>Reference de paiement</p>
                <input type="number" name="ref_paiement" id="ref_paiement" placeholder="" required > <br><br>
                
                <input type="submit" value="Envoyer">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="reset" value="Effacer">
             
            </form>
            
            <<!--?php
              
              if(isset($_POST)&& !empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['adresse'])&& !empty($_POST['email'])
                && !empty($_POST['telephone'])&& !empty($_POST['referencepaiement'])  ) {
               
               extract($_POST);
               $destinataire = 'garilsenan@gmail.com';
               $expediteur =$nom.'<'.$email.'>';
               $mail = mail($destinataire, $object, $message, $expediteur. ' : HOUENOU Johannes');
               if($mail)echo'Email envoye avec succes'; else echo "Echec de l'envoi de l'email";
               
               
               
              } else echo "Formulaire non soumis ou des champs sont vides";
                 
                 
            
            
            ?--> 
            
            
        </div>
                <!--FIN FORMULAIRE D'achat-->

       
        
        
        
        
    </body>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
</html>