<?php
class homeController extends controller {	

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();

        $portfolio = new Portfolio();
        $data['portfolio'] = $portfolio->getTrabalhos(8);
        
        $this->loadTemplate('home', $data);
    }
}