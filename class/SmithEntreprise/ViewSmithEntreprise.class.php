<?php
    class ViewSmithEntreprise extends ModelSmithEntreprise{

        public function allArticles(){
            return $this->getAllArticle();
        }

        public function allAchats(){
            return $this->getAllAchat();
        }

        public function allClients(){
            return $this->getAllClients();
        }
    }
?>