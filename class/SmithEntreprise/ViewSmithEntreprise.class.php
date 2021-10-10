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

        
        public function searchAchats($id){
            return $this->searchAchat($id);
        }

        public function searchArticles($id)
        {
            return $this->searchArticle($id);
        }

        public function searchClients($id)
        {
            return $this->searchClient($id);
        }
    }
?>