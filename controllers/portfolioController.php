<?php
class portfolioController extends controller {	

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();

        $portfolio = new Portfolio();
        $data['portfolio'] = $portfolio->getTrabalhos();
        
        $this->loadTemplate('portfolio', $data);
    }
}