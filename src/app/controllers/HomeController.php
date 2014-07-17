<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author Kempfer
 */
class HomeController extends  Controller  {
    

    
    /**
     * 
     */
    public function getRedirect ($short) {
        $a = Link::where('short',$short)->get()->toArray();
        print_r($a);
    }
} 