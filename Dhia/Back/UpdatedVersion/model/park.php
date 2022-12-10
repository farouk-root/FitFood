<?php

class park {

    private $placepark;
    private $Bloc;
    private $nbr_places;

    function __construct ($placepark,$Bloc,$nbr_places)
    {
        $this->placepark= $placepark;
      $this->Bloc= $Bloc;
      $this->nbr_places= $nbr_places;
    }
    

    //Idon't need these setters and getters but I placed them to Use them 
    //When i need them , Maybe next time ! 

    function getID(){
        return $this->placepark;
    } 
    function getBloc(){
        return $this->Bloc;
    } 
    function getNbr_places(){
        return $this->nbr_places;
    } 

    function setID($placepark){
        $this->placepark= $placepark;
    }
    function setBloc($Bloc){
        $this->Bloc= $Bloc;
    }
    function setNbr_place($nbr_places){
        $this->nbr_places= $nbr_places;
    }


}

?>