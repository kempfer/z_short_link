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
    public function getIndex () {
        echo "adad";exit;
    }
    /**
     * 
     */
    public function getRedirect ($short) {
        //return Redirect::to('https://www.google.com.ua/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=laravel+4+controller+load+model');
        echo $short;
    }
} 