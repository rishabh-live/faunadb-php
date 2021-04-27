<?php
/*
*
* @param 
*
*/

$keyg = "NOT_DEFINED";
$defaultCollection = "NOT_DEFINED";

class FaunaPhp {
    
    // Function to connect to the FaunaDB server
    public function connectFauna($key){
        $GLOBALS['keyg'] = $key;
        $output = shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/checkConnection.js '.$key);
        return $output;
    }

    // Funtion to create a new database on the FaunaDB Server
    public function createCollection($name){
        $output = shell_exec(getcwd().'/src/bin/node '.getcwd().'/src/lib/createCollection.js '.$GLOBALS['keyg']. ' '.$name);
        return $output;
    }

    //Funtion to set a default collection
    
    public function setDefaultCollection($name){
        $GLOBALS['defaultCollection'] = $name;
        return $GLOBALS['defaultCollection'];
    }

    // Funtion to use a default collection
    
    public function useDefaultCollection(){
        return $GLOBALS['defaultCollection'];
    }
}
