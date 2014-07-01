<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RestController
 *
 * @author Kempfer
 */
class RestController extends  Controller {

    
    public function __construct(Link $link) {
        $this->link = $link;
    }

        /**
     * 
     */
    public function postCreate () {
        $longLink = Input::get('long_link');
        
    }
    /**
     * 
     */
    public function getIndex () {
        
    }
}