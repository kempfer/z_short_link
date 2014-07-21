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
    
    public $layout = 'site.layouts.default';
    
    /**
     * Initializer.
     *
     * @access   public
     * @return \BaseController
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }
    
    protected function setupLayout()
    {
        if(!is_null($this->layout))
            $this->layout = View::make($this->layout);
    }
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
        return View::make('site.home.index');
    }
} 