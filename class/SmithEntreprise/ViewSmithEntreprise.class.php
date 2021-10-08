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
            $this->searchAchat($id);
        }

        public function searchArticles($id)
        {
            $this->searchArticle($id);
        }

        public function searchClients($id)
        {
            $this->searchClient($id);
        }
    }
?>