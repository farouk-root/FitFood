<?php
class Forum {
    private $titre;
    private $descrption;
    private $image;

    function __construct($titre,$descrption){

        $this->titre = $titre;
        $this->descrption =$descrption

    }

    public function ajouter($name){

        include('./includes/config.php');

     
   $req = $bdd->exec("INSERT INTO 'forum'('tirtre' , 'descrption', 'image' )VALUES ('$this->titre','$this->description','$name')"
    
echo '<span class ="message_envoyer">Message envoyer avec succes</span>';


    }


}
//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);