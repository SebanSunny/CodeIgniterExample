<?php
/**
 * Created by PhpStorm.
 * User: Seban
 * Date: 8/3/2016
 * Time: 8:46 AM
 */

class Home extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper("url");
    }

    public function data() {

        $this->load->view("header");
        $this->load->view("footer");

    }
}
