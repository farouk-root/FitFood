<?php

class comman
{
    private $name;
    private $address;
    private $tel;
    private $email;
    private $city;
	private $id_commande;
    //private $image;

    // Le Constructeur
    function __construct($name,
                        $address,
                        $tel,  
                        $email,
                        $city,
                        $id_commande)
    {$this->name= $name;
      $this->address= $address;
      $this->tel= $tel;
      $this->email= $email;
      $this->city= $city;
	  $this->id_commande= $id_commande;
      //$this->image= $img;
    }

    // Les Getters
    function getname(){
        return $this->name;
    } 
    function getaddress(){
        return $this->address;
    } 
    function gettel(){
        return $this->tel;
    }
    function getemail(){
        return $this->email;
    } 
    function getcity(){
        return $this->city;
    } 
	function getid_commande(){
        return $this->id_commande;
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
    function setaddress($address){
        $this->address= $address;
    }
    function settel($tel){
        $this->tel= $tel;
    }
    function setemail($email){
        $this->email= $email;
    }
    function setcity($city){
        $this->city= $city;
    }
	function setid_commande($id_commande){
        $this->id_commande= $id_commande;
    }
    /*function setImage($img){
        $this->image= $img;
    }
    */
}
?>