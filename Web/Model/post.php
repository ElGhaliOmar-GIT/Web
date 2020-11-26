<?php
class post {
    private $id;
    
    public function __construct($id) {
        $this->id=$id;
    }
    public function getId() {
        return $this->id;
    }

       
    public function setId() {
        return $this->id;
    }


}
?>