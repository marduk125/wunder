<?php

class Controller
{
    public function getDb()
    {
        
	    $db_config_file = "../app/config/DB.cfg";
	
		$db_configs = parse_ini_file($db_config_file, true);

		$db_config = $db_configs["WUNDER"];
		$db_host = $db_config["host"];
		$db_name = $db_config["dbname"];
		$db_user = $db_config["user"];
		$db_pass = $db_config["pass"];

        return new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pass);
    }
    public function getUrl()
    {
        return "https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data";
    }
    protected function model($model)
    {
        
        require_once '../app/models/' . $model . '.php';
        return new $model($this->getDb(),$this->getUrl());
    }
    protected function view($view,$data=[])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
