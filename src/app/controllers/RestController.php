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
        $shortLink = RandomString::get(6,true,true,true);
        $this->link->setAttribute('long',$longLink);
        $this->link->setAttribute('short',$shortLink);
        $this->link->save();
    }
    /**
     *
     */
    public function getIndex () {

    }
}