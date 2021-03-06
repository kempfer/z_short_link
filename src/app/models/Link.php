<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Links
 *
 * @author Kempfer
 */
use Jenssegers\Mongodb\Model as Eloquent;

class Link extends Eloquent {

    
    public $shortLink;
    
    public $longLink;
    
    public $time;
    /**
     *
     * @var string
     */
    protected $connection = 'mongodb';
    
    /**
     *
     * @var string 
     */
    protected $collection = 'links';
    
    
    
}