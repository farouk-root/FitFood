<?php

class parking
{
    private $matricule;
    private $name;
    private $date;
    private $placepark;
    private $id_client;
	private $id_table;
    //private $image;

    // Le Constructeur
    function __construct($matricule,
                        $name,
                        $date,  
                        $placepark,
                        $id_client,
                        $id_table)
    {$this->matricule= $matricule;
      $this->name= $name;
      $this->date= $date;
      $this->placepark= $placepark;
      $this->id_client= $id_client;
	  $this->id_table= $id_table;
      //$this->image= $img;
    }

    // Les Getters
    function getID(){
        return $this->matricule;
    } 
    function getName(){
        return $this->name;
    } 
    function getDate(){
        return $this->date;
    }
    function getPlacepark(){
        return $this->placepark;
    } 
    function getId_client(){
        return $this->id_client;
    } 
	function getId_table(){
        return $this->id_table;
    } 
    /*
    function getImage(){
        return $this->image;
    } 
    */
    //i've deleted the image attribute because i dont have time to synchronise 
    // adding an image to my database plus displayin it 

    // ive had problems with php while adding image $image index undefined 
    // didnt find a solution :) 
    
     // Les Setters
    function setName($name){
        $this->name= $name;
    }
    function setDate($date){
        $this->date= $date;
    }
    function setPlacepark($placepark){
        $this->placepark= $placepark;
    }
    function setId_client($id_client){
        $this->id_client= $id_client;
    }
	function setId_table($id_table){
        $this->id_table= $id_table;
    }
    /*function setImage($img){
        $this->image= $img;
    }
    */
}
?>