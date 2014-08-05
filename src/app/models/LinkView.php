<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LinkView
 *
 * @author Zotov Maxim <zotov_mv@groupbwt.com>
 */
use Jenssegers\Mongodb\Model as Eloquent;

class LinkView extends Eloquent {

    protected $connection = 'mongodb';


    public $link_id;

    public $details;

    /**
     *
     * @var string
     */
    protected $collection = 'link_views';
}