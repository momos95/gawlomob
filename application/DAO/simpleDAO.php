<?php


class simpleDAO extends PDO{

    
    private $engine; 
    private $dns ;
    
    public function __construct() {
        
        $this->engine = "mysql" ;
        $this->dns = $this->engine.':dbname='.BDD_NAMEBASE.";host=".BDD_HOSTNAME;        
        parent::__construct($this->dns, BDD_USERNAME, BDD_PASSWORD,array()); 
        $this->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $this->exec("SET NAMES utf8");
            
    }            
    


    
    private function getLastIdLieu(){
        $sql = "SELECT lieu_id FROM lieu ORDER BY lieu_id DESC LIMIT 1" ;
        $req = $this->prepare($sql) ;
        $req->execute();
        $res = $req->fetch();
        return $res['lieu_id'] ;
    }
    
   public function getAllArticles(){
       $sql = "SELECT ID, post_date,post_title, post_content FROM wp_posts WHERE post_content != '' and post_status = 'publish' ORDER BY post_date DESC LIMIT 100";
       $req = $this->prepare($sql);
       $req->execute();
       return $req->fetchAll() ;
   }

   public function getImageUrl($id_parent){
       $sql = "SELECT guid FROM wp_posts WHERE post_parent = ?  and post_type='attachment' ";
       $req = $this->prepare($sql);
       $req->execute(array($id_parent));
       return $req->fetch()['guid'] ;
   }

   public function getCategory($id_post){
       $sql = "SELECT term_taxonomy_id FROM wp_term_relationships WHERE object_id = ? ORDER BY term_taxonomy_id ";
       $req = $this->prepare($sql);
       $req->execute(array($id_post));
       $res = $req->fetch();
       $cat_id = $res['term_taxonomy_id'] ;
       $sql = "SELECT term_id, parent FROM wp_term_taxonomy WHERE term_taxonomy_id = ? ";
       $req = $this->prepare($sql);
       $req->execute(array($cat_id));
       $res = $req->fetch() ;
       return $res['parent'] == 0 ? $res['term_id'] : $res['parent'] ;

   }

    public function getUserByLogin($login){
        $sql = "SELECT * FROM user WHERE login = ?";
        $req = $this->prepare($sql);
        $req->execute(array($login));
        return $req->fetch() ;
    }



}
