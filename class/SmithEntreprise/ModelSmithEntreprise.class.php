<?php
     class ModelSmithEntreprise extends ConnectToBD{
        protected function getAllArticle(){
            $sql = ' SELECT * FROM articles; ';
            $stm = $this->getConnection()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }
     }
?>