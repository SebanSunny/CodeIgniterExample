<?php
/**
 * Created by PhpStorm.
 * User: Seban
 * Date: 8/4/2016
 * Time: 11:30 AM
 */

class About extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper("url");
	}

    public function index() {

        $this->load->view("templates/header");
		$this->load->view("templates/footer");
    }
}
