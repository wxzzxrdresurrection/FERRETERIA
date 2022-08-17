<?php

namespace MyApp\query;
use PDO;
use PDOException;
use MyApp\data\Database;

class ejecutar
{
    public function ejecutar($qry)
    {
        try
        {
            $con = new Database("save", "root", "admin");
            $objetoPDO = $con->getPDO();
            $objetoPDO->query($qry);
            $con->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e ->getMessage();
        }
    }
}
