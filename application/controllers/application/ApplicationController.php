<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicationController
 *
 * @author mamadou
 */
class ApplicationController {       

    private $bdd ;
    
    public function __construct() {
        $this->bdd = new simpleDAO();
    }


    public function listAllArticles(){

        $response['error'] = FALSE ;
        $response["articles"] = $this->getArticles();
        echo json_encode($response, JSON_PRETTY_PRINT);
    }


    private function getArticles(){

        $articles = $this->bdd->getAllArticles() ;
        $rest = array() ;

        foreach ($articles as $line){

            $temp['id']         = $line['ID'] ;
            $temp['content']    = htmlentities($line['post_content']) ;
            $temp['title']      = htmlentities($line['post_title']) ;
            $temp['date']       = $line['post_date'] ;
            $temp['image']      = $this->bdd->getImageUrl($line['ID']) ;
            $temp['category']   = $this->bdd->getCategory($line['ID']) ;
            $rest[] = $temp ;

        }

        return $rest ;
    }
}
