<?php
    class ControleurSmithEntreprise extends ModelSmithEntreprise{

        public function updateArticles($id, $nom, $description, $prix){
            $this->updateArticle($id, $nom, $description, $prix);   
        }

        public function insertIntoArticles($id, $nom, $description, $prix){
            $this-> insertIntoArticle($id, $nom, $description, $prix);
        }

        public function insertIntoAchats($id_achat, $id_client, $id_article, $quantite, $date){
            $this-> insertIntoAchat($id_achat, $id_client, $id_article, $quantite, $date);
        }

        public function insertIntoClients($nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone){
            $this-> insertIntoClient($nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone);
        }


        public function deleteAchats($id){
            $this->deleteAchat($id);
        }

        public function deleteArticles($id)
        {
            $this->deleteArticle($id);
        }

        public function deleteClients($id)
        {
            $this->deleteClient($id);
        }
        
    }
