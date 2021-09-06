
<?php
    $msg = null;
    $msgClass = null;
    $firstName = null;
    $name = null;
    $mail = null;
    $newsletter = 0;
    $Syntaxemail='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#i';

/*Connection*/

    $host = 'localhost';
    $dbname = 'adimeo_db';
    $username = 'root';
    $password = '';

    try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  /*  echo "Connecté à $dbname sur $host avec succès.";*/

    } catch (PDOException $e) {

    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());

    }
               /*Requetes-------INSERT--------*/
 
    if(isset($_POST['submitButton'])){
        //verification des elements
        if(!empty($_POST['firstName']) && !empty($_POST['name']) && !empty($_POST['mail']))
        {
            if(preg_match( $Syntaxemail, $_POST['mail'])){
               
           
                if(isset($_POST['newsletter']) && $_POST['newsletter'])
                {
                    $newsletter = 1;
                }
                $insert = $conn->prepare('INSERT INTO touriste(prenom, nom, mail, newsletter) VALUES (?,?,?,?)');
                $validate = $insert -> execute(array(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING),
                    filter_var($_POST['name'], FILTER_SANITIZE_STRING),
                    filter_var($_POST['mail'], FILTER_SANITIZE_STRING),
                    $newsletter)
                );
                if($validate){
                    $msgClass = "divMsgSuccess";
                    $msg = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING) . " " . strtoupper(filter_var($_POST['name'], FILTER_SANITIZE_STRING)) .
                    " vous avez bien été enregistré !";
                }
            } else{
                $msg ='veuillez rentrer un email valide';
                $msgClass = "divMsgErr";
                $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
                if(isset($_POST['newsletter']) && $_POST['newsletter']){
                    $newsletter = 1;
                }
            }  
        } else{
            $msg = "Veuillez remplir tous les champs obligatoires";
            $msgClass = "divMsgErr";
            $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
            if(isset($_POST['newsletter']) && $_POST['newsletter']){
                $newsletter = 1;
            }
        }
    }
    /*-----------Requetes SELECT pour l'affichage---------- 
    $query = $conn->query("SELECT prenom, nom, mail, newsletter FROM touriste;"); 
    $textTouriste = '' ;
    while($data = $query->fetch()){
        $check = $data['newsletter'];
        $textTouriste = $textTouriste. '<div>
                <h2>' . $data['prenom'] . ' ' . $data['nom'] . ' @: ' . $data['mail'] .' inscrit a la newsLetter :' ;
            
        if($check = 0){
            echo 'non';
        }else 
        $textTouriste = $textTouriste. 'oui';
        $textTouriste = $textTouriste. ' </h2> </div>';
        }
        */
    require('template.php');
