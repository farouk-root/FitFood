<?php

class Reclamation
{
    private ?int $id;
    private int $client_id;
    private string $subject;
    private string $body;
    private string $status;

    function __construct($id, $client_id,
        $subject, $body, $status) {

        $this->id = $id;
        $this->client_id = $client_id;
        $this->subject = $subject;
        $this->body = $body;
        $this->status = $status;

    }

    function getID(): int {
        return $this->id;
    }

    function getClientID(): int {
        return $this->client_id;
    }

    function getSubject(): string {
        return $this->subject;
    }

    function getBody(): string {
        return $this->body;
    }

    function getStatus(): string {
        return $this->status;
    } 

    function setID(int $id) {
        $this->id = $id;
    }

    function setClientID(int $client_id) {
        $this->client_id = $client_id;
    }

    function setSubject(string $subject) {
        $this->subject = $subject;
    }

    function setBody(string $body){
        $this->body = $body;
    }

    function setStatus(string $status) {
        $this->status = $status;
    }
}
?>