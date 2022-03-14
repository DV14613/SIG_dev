<?php
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';

class DashboardController {
    
    public function dashboard() {
        require_once 'views/layouts/dashboard/dashboard.php';
    }

    public function vista1() {
        $data = file_get_contents(BASE_URL."dataTest/Usuario.json");
        $tupla = json_decode($data, true);
        require_once 'views/layouts/layout1/vista1.php';
    }    

    public function vista2() {
        require_once 'views/layouts/layout2/vista2.php';
    }        
    
}
