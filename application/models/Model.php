<?php

class Model {
    

    public function __construct($datas) {
        
        if(empty($datas) || $datas == NULL){
            foreach($this as $key){
                $this->$key = "" ;
            }
            
        }
        else{
            $this->hydrate($datas);
        }
        
    }
    
    protected function hydrate(array $donnees){
        
        foreach ($donnees as $key => $value){

            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)){
              // On appelle le setter.
              $this->$method($value);
            }
        }
    }
}
