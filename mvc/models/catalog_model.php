<?php

class Catalog_Model extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getList() {
        return array('LIST' => array('Samsung','IPone','Nokia'));
        
    }
}
