<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livraison
 *
 * @author mamadou
 */
class Livraison extends Model {
    
    private $id_livraison ;
    private $libelle_livraison ;
    private $client_id ;
    private $livreur_id ;
    private $date_demande ;
    private $heure_demande ;
    private $date_livraison ;
    private $statut_livraison ; 
    
    public function __construct(array $datas) {
        
        parent::__construct($datas);
                
    }
    
    function getHeure_demande() {
        return $this->heure_demande;
    }

    function setHeure_demande($heure_demande) {
        $this->heure_demande = $heure_demande;
    }

        
    function getId_livraison() {
        return $this->id_livraison;
    }

    function getLibelle_livraison() {
        return $this->libelle_livraison;
    }

    function getClient_id() {
        return $this->client_id;
    }

    function getLivreur_id() {
        return $this->livreur_id;
    }

    function getDate_demande() {
        return $this->date_demande;
    }

    function getDate_livraison() {
        return $this->date_livraison;
    }

    function getStatut_livraison() {
        return $this->statut_livraison;
    }

    function setId_livraison($id_livraison) {
        $this->id_livraison = $id_livraison;
    }

    function setLibelle_livraison($libelle_livraison) {
        $this->libelle_livraison = $libelle_livraison;
    }

    function setClient_id($client_id) {
        $this->client_id = $client_id;
    }

    function setLivreur_id($livreur_id) {
        $this->livreur_id = $livreur_id;
    }

    function setDate_demande($date_demande) {
        $this->date_demande = $date_demande;
    }

    function setDate_livraison($date_livraison) {
        $this->date_livraison = $date_livraison;
    }

    function setStatut_livraison($statut_livraison) {
        $this->statut_livraison = $statut_livraison;
    }

    public function getDonnees(){
        
        $donnees = array();
        
        foreach($this as $key => $value){
            if(strcmp($key, "id_livraison") != 0 && strcmp($key, "date_livraison") != 0){
                $donnees[$key] = $value ;
            }
        }
        
        return $donnees ;
    }
    
    public function getDatas(){
        
    }
   
}
