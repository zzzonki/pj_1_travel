<?php


class Info
{
public function __construct($id, $content, $ordera){
    $this->id = $id;
    $this->content = "<div class='info-text'><p class='info-text__p'>".$content."</p></div>";
    $this->ordera = $ordera;
}
}