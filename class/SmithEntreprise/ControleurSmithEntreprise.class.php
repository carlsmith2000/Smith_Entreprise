<?php
    class ControleurSmithEntreprise extends ModelSmithEntreprise{

        public function updateArticles($id, $nom, $description, $prix){

            $this->updateArticle($id, $nom, $description, $prix);   

        }
        
    }
?>