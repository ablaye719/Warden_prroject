<?php
class ConnexionDB{
	public function connect(){
        $dsn = 'mysql:host=localhost;dbname=Warden_BDD;charset=utf8'
        $ma_connexion_mysql = new PDO($dsn, 'root', '');
        $ma_connexion_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $ma_connexion_mysql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); 
        return $ma_connexion_mysql;
    }
}
?>