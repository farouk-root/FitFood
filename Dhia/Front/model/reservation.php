<?php

class reservation
{
    private $id_table;
    private $name;
    private $datereservation;
    private $nombre;
    private $num_tel;
	private $id_client;
    //private $image;

    // Le Constructeur
    function __construct($id_table,
                        $name,
                        $datereservation,  
                        $nombre,
                        $num_tel,
                        $id_client)
    {$this->id_table= $id_table;
      $this->name= $name;
      $this->datereservation= $datereservation;
      $this->nombre= $nombre;
      $this->num_tel= $num_tel;
	  $this->id_client= $id_client;
      //$this->image= $img;
    }

    // Les Getters
    function getID(){
        return $this->id_table;
    } 
    function getName(){
        return $this->name;
    } 
    function getDatereservation(){
        return $this->datereservation;
    }
    function getNombre(){
        return $this->nombre;
    } 
    function getNum_tel(){
        return $this->num_tel;
    } 
	function getId_client(){
        return $this->id_client;
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
    function setDatereservation($datereservation){
        $this->datereservation= $datereservation;
    }
    function setNombre($nombre){
        $this->nombre= $nombre;
    }
    function setNum_tel($num_tel){
        $this->num_tel= $num_tel;
    }
	function setId_client($id_client){
        $this->id_client= $id_client;
    }
    /*function setImage($img){
        $this->image= $img;
    }
    */
}
?>