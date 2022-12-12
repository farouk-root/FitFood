<?php

class Resolution
{
    private ?int $id;
    private int $reclamation_id;
    private string $body;

    function __construct($id, $reclamation_id, $body) {

        $this->id = $id;
        $this->reclamation_id = $reclamation_id;
        $this->body = $body;

    }

    function getID(): int {
        return $this->id;
    }

    function getReclamationID(): int {
        return $this->reclamation_id;
    }

    function getBody(): string {
        return $this->body;
    }

    function setID(int $id) {
        $this->id = $id;
    }

    function setReclamationID(int $reclamation_id) {
        $this->reclamation_id = $reclamation_id;
    }

    function setBody(string $body){
        $this->body = $body;
    }
}
?>