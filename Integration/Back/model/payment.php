<?php

class payment
{
    private $id_commande;
    private $name;
    private $expm;
    private $expy;
    private $cvv;
    private $id_payment;
	
    //private $image;

    // Le Constructeur
    function __construct($id_commande,
                        $name,
                        $expm,  
                        $expy,
                        $cvv,
                        $id_payment
                        )
    {$this->id_commande= $id_commande;
      $this->name= $name;
      $this->expm= $expm;
      $this->expy= $expy;
      $this->cvv= $cvv;
      $this->id_payment= $id_payment;
	  
      //$this->image= $img;
    }

    // Les Getters
    function getid_commande(){
        return $this->id_commande;
    } 
    function getname(){
        return $this->name;
    } 
    function getexpm(){
        return $this->expm;
    }
    function getexpy(){
        return $this->expy;
    } 
    function getcvv(){
        return $this->cvv;
    } 
    function getid_payment(){
        return $this->id_payment;
    } 


    /*
    function getImage(){
        return $this->image;
    } 
    */
    //i've deleted the image attribute because i dont have time to synchronise 
    // adding an image to my database plus id_commandeplayin it 

    // ive had problems with php while adding image $image index undefined 
    // didnt find a solution :) 
    
     // Les Setters
     function setid_commande($id_commande){
        $this->id_commande= $id_commande;
    }
    function setname($name){
        $this->name= $name;
    }
    function setexpm($expm){
        $this->expm= $expm;
    }
    function setexpy($expy){
        $this->expy= $expy;
    }
    function setcvv($cvv){
        $this->cvv= $cvv;
    }
	
    /*function setImage($img){
        $this->image= $img;
    }
    */
}
?>