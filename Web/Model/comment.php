<?php
class comment {
    private $id;
    private $postId;
    private $text;
    private $date;
    private $userId;

    public function __construct($text, $date) {
        $this->text=$text;
        $this->date=$date;
    }
    public function getId() {
        return $this->id;
    }

    public function setText($text) {
        $this->text=$text;
    }
    public function getText() {
        return $this->text;
    }

    public function setDate($date) {
        $this->date=$date;
    }
    public function getDate() {
        return $this->date;
    }


}

?>