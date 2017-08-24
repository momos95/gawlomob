<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sortie
 *
 * @author mse
 */
class Sortie extends Model{
    
    private $sortie_id ;
    private $id_createur ;
    private $libelle ;
    private $type ;
    private $pays ;
    private $region ;
    private $ville ;
    private $adresse ;
    private $date_sortie ;
    private $date_creation ;
    private $nb_can ;
    private $nb_can_max ;
    private $id_lieu ;
        
    public function __construct(array $datas) {
        
        parent::__construct($datas);
                
    }
    
    function getId_lieu() {
        return $this->id_lieu;
    }

    function setId_lieu($id_lieu) {
        $this->id_lieu = $id_lieu;
    }

        
    function getSortie_id() {
        return $this->sortie_id;
    }

    function getId_createur() {
        return $this->id_createur;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getType() {
        return $this->type;
    }

    function getPays() {
        return $this->pays;
    }

    function getRegion() {
        return $this->region;
    }

    function getVille() {
        return $this->ville;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getDate_sortie() {
        return $this->date_sortie;
    }

    function getDate_creation() {
        return $this->date_creation;
    }

    function getNb_can() {
        return $this->nb_can;
    }

    function getNb_can_max() {
        return $this->nb_can_max;
    }

    function setSortie_id($sortie_id) {
        $this->sortie_id = $sortie_id;
    }

    function setId_createur($id_createur) {
        $this->id_createur = $id_createur;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setDate_sortie($date_sortie) {
        $this->date_sortie = $date_sortie;
    }

    function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }

    function setNb_can($nb_can) {
        $this->nb_can = $nb_can;
    }

    function setNb_can_max($nb_can_max) {
        $this->nb_can_max = $nb_can_max;
    }

    public function getLieuDatas(){
        
        $datas = array(
            'pays'      => $this->getPays(),
            'region'    => $this->getRegion(),
            'ville'     => $this->getVille(),
            'adresse'   => $this->getAdresse()            
        ) ;
        
        return $datas;
    }

    
    public function getSortieDatas(){
        
        $datas = array(
            'id_createur'   => $this->getId_createur(),
            'libelle'       => $this->getLibelle(),
            'type'          => $this->getType(),            
            'id_lieu'       => $this->getId_lieu(),
            'date_sortie'   => $this->getDate_sortie(),
            'nb_can_max'    => $this->getNb_can_max(),
            'nb_can'        => $this->getNb_can()
        ) ;
        
        return $datas;
    }

    public function getDonnees(){
        
        $donnees = array();
        
        foreach($this as $key => $value){
            if(strcmp($key, "sortie_id") != 0 && strcmp($key, "date_creation") != 0){
                $donnees[$key] = $value ;
            }
        }
        
        return $donnees ;
    }
    
    
}
