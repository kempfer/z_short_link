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
        $link = Link::select('long')->where('short',$short)->pluck('long');
        if(!empty($link)){
            return Redirect::to($link);
        }
    }
    /**
     * 
     */
    public function getIndex () {
        
    }
} 