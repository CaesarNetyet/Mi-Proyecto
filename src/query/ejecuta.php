<?php

namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class Ejecuta {
    public function ejecutar($qry) 
    {
        try 
        {
            $cc = new Database("appsweb2","root","");
            $objetoPDO = $cc->getPDO();
            $objetoPDO->query($qry);
            
            $cc->desconectarDB();
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
    }

    
}