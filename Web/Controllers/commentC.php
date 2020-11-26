<?php
    require_once '../PDO.php';

    class commentC{
        public function retrieveAllComments() {
            $sql='select * from comments'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); //amalna el connection bin Code ou Base de donnee
            $list=$db->query($sql);
            return $list;
        }

        public function retrieveComment($id) {
            $sql='select * from comments where id=:id'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); // madhebik t3awedhom nafshom
            $query=$db->prepare($sql); // madhebik t3awedhom nafshom
            $query->execute(['id' => $id]); // madhebik t3awedhom nafshom
            return $query->fetch(PDO::FETCH_ASSOC); // madhebik t3awedhom nafshom
        }

        public function addCommet($comment) {
            $sql='insert into comments(text, date) values(:text, :date)';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'text' => $comment->getText(),
                'date' => $comment->getDate(),
                
            ]);
        }

        public function deleteComment($id) {
            $sql='delete from comments where id=:id';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute(['id' => $id]);
        }

        public function updateUser($comment, $id) {
            $sql='update comments SET 
                text = :text, 
                date = :date,
                WHERE id = :id';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'text' => $comment->getText(),
                'date' => $comment->getDate(),
                'id' => $id
            ]);
        }
    }

?>