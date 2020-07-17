 <?php
              
              if(isset($_POST)&& !empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['adresse'])&& !empty($_POST['email'])
                && !empty($_POST['telephone'])&& !empty($_POST['referencepaiement'])  ) {
               
               extract($_POST);
               $destinataire = 'garilsenan@gmail.com';
               $expediteur =$nom.'<'.$email.'>';
               $mail = mail($destinataire, $object, $message, $expediteur. ' : HOUENOU Johannes');
               if($mail)echo'Email envoye avec succes'; else echo "Echec de l'envoi de l'email";
               
               
               
              } else echo "Formulaire non soumis ou des champs sont vides";
                 
                 
            
            
            ?>
            