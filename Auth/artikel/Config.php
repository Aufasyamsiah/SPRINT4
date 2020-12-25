<?php

class Config
{
    public function connect()
    {
         
        $con = mysqli_connect('localhost', 'root', 'aufa1802', 'pondok'); 

        return $con;

        
    }
}
