<?php
     class ModelSmithEntreprise extends ConnectToBD{

        //  RECUPERATION DES DONNEES DE LA TABLE ARTICLE

        protected function getAllArticle(){
            $sql = ' SELECT * FROM articles; ';
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

           //  RECUPERATION DES DONNEES DE LA TABLE ACHTAT

        protected function getAllAchat(){
            $sql = ' SELECT * FROM achats; ';
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        //  RECUPERATION DES DONNEES DE LA TABLE CLIENT

        protected function getAllClients(){
            $sql = ' SELECT * FROM clients; ';
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        // INSETION DANS LA TABLE ARTICLE

        protected function insertIntoArticle( $nom, $description, $prix){
            $sql = " INSERT INTO articles (nom, description, prix) VALUES (?, ?, ?); ";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([ $nom, $description, $prix]);
        }

         // INSETION DANS LA TABLE ACHAT

         protected function insertIntoAchat($id_client, $id_article, $quantite, $date){
            $sql = " INSERT INTO achats (id_client, id_article, quantite, date) VALUES (?, ?, ?, ?); ";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id_client, $id_article, $quantite, $date]);
        }

        // INSETION DANS LA TABLE CLIENT

        protected function insertIntoClient($nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone){
            $sql = " INSERT INTO clients (nom, prenom, adresse, codepostal, ville, pays, telephone) VALUES (?, ?, ?, ?, ?, ?, ?); ";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone]);
        }


        // UPDATE DANS LA TABLE ARTICLE

        protected function updateArticle($id, $nom, $description, $prix){
            $sql = "UPDATE articles set nom = ?, description = ? , prix = ? WHERE reference = ? ;";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$nom, $description, $prix, $id]);
        }

        // UPDATE DANS LA TABLE ACHTAT

        protected function updateAchat($id_achat, $id_client, $id_article, $quantite, $date){
            $sql = "UPDATE achats set id_client = ?, id_article = ? , quantite = ?, date = ?  WHERE id_achat = ? ;";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id_client, $id_article, $quantite, $date, $id_achat]);
        }

        // UPDATE DANS LA TABLE CLIENT

        protected function updateClient($numero, $nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone){
            $sql = "UPDATE clients set nom = ?, prenom = ?, adresse = ?, codepostal = ?, ville = ?, pays = ?, telephone = ? WHERE numero = ? ;";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$nom, $prenom, $adresse, $codepostal, $ville, $pays, $telephone, $numero]);
        }



        // RECHERCHE DES DONNEES DANS LA TABLE ARTICLE

        public function searchArticle($id){
            $sql = "SELECT * FROM articles WHERE reference = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        }

        // RECHERCHE DES DONNEES DANS LA TABLE ACHAT

        public function searchAchat($id){
            $sql = "SELECT * FROM achats WHERE id_achat = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        }

        // RECHERCHE DES DONNEES DANS LA TABLE CLIENT

        public function searchClient($id){
            $sql = "SELECT * FROM clients WHERE numero = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        }



        // SUPPRESSION DES DONNEES DANS LA TABLE ARTICLE

        public function deleteArticle($id){

            $sql = "DELETE FROM achats WHERE id_article = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);

            $sql = "DELETE FROM articles WHERE reference = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
        }

        // SUPPRESSION DES DONNEES DANS LA TABLE ACHAT

        public function deleteAchat($id){

            $sql = "DELETE FROM achats WHERE id_achat = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
        }

        // SUPPRESSION DES DONNEES DANS LA TABLE CLIENT

        public function deleteClient($id){

            $sql = "DELETE FROM achats WHERE id_client = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);

            $sql = "DELETE FROM clients WHERE numero = ?";
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute([$id]);
        }

    }
?>