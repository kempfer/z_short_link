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
class Link extends Eloquent {

    /**
     *
     * @var string
     */
    protected $connection = 'mongodb';
    
    /**
     *
     * @var string 
     */
    protected $table = 'links';
    
}