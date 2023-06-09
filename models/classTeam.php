<?php
require_once "classModel.php";

class Team extends Model{
    public function getPTeams(){
        $req1 = $this->getBdd()->prepare("SELECT * FROM teams");
        $req1->execute();
        return $articles = $req1->fetchAll();
    }
    public function recupererArticle(int $id){
        $req2 = $this->getBdd()->prepare("SELECT * FROM article WHERE id=:id");
        $req2->execute([
            'id' => $id
        ]);
        $data = $req2->fetch();
        return $data;
    }
}
?>