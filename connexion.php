 
 <?php
 
 
   if($_SERVER["REQUEST_METHOD"] == "POST"){
  
 
     
    
    
   
         try{
        
             $connexion = new PDO('mysql:host=localhost; dbname=johannes', 'root','');
       }
        
        catch(Exception $e){
        
            die('Erreur :'.$e->getMessage());
        }
        
          $pdoconnect = $connexion->prepare('INSERT INTO formulaire(nom, prenom, adresse, email, telephone, referencepaiement)
                                            VALUES ( :nom, :prenom, :adresse, :email, :telephone, :referencepaiement)');
        
          $pdoconnect->execute(array(
            
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'adresse'=>$_POST['adresse'],
            'email'=>$_POST['email'],
            'telephone'=>$_POST['tel'],
            'referencepaiement'=>$_POST['ref_paiement'],
            
            ));
    
        
          header("Location:remerciement.html");
          
          
         
        
       
          
         
          
         
            
           }
  
         
         
        
        
         
        
        
        
        
 
 

          
          
          
         

      
        
        
        
        
        
 
            


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>
