<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author mse
 */
class User extends Model{
    
    private $user_id ;
    private $nom;
    private $prenom ;
    private $date_naissance ;
    private $sexe ;
    private $login ;
    private $password ;
    private $email ;
    private $numero_tel ;
    private $date_inscription ;
    private $nb_sorties ;
    
    function getUser_id() {
        return $this->user_id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDate_naissance() {
        return $this->date_naissance;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getNumero_tel() {
        return $this->numero_tel;
    }

    function getDate_inscription() {
        return $this->date_inscription;
    }

    function getNb_sorties() {
        return $this->nb_sorties;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNumero_tel($numero_tel) {
        $this->numero_tel = $numero_tel;
    }

    function setDate_inscription($date_inscription) {
        $this->date_inscription = $date_inscription;
    }

    function setNb_sorties($nb_sortie) {
        $this->nb_sorties = $nb_sortie;
    }

    public function __construct(array $datas) {
        
        parent::__construct($datas);
                
    }
    
    public function getDonnees(){
        
        $donnees = array();
        
        foreach($this as $key => $value){
            if(strcmp($key, "user_id") != 0 && strcmp($key, "date_inscription") != 0 && strcmp($key, "nb_sorties") != 0){
                $donnees[$key] = $value ;
            }
        }
        
        return $donnees ;
    }
}
