<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: shayegh
 * Date: 1/25/17
 * Time: 10:47 AM
 */
class About extends Application
{
    public function index()
    {
        $this->data['pagebody'] = 'about';
        $this->render();
    }

}